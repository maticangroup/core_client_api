<?php
/**
 * Created by PhpStorm.
 * User: hossein
 * Date: 02/05/19
 * Time: 10:51
 */

namespace Matican\Core\Transaction;

use App\ClientConfig;
use GuzzleHttp\Psr7\UploadedFile;
use Matican\Core\Config;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Matican\Models\Media\Image;
use Matican\ModelSerializer;
use ReflectionClass;
use ReflectionProperty;


class Request
{
    /**
     * @var string
     */
    private $domain;
    /**
     * @var string
     */
    private $server;
    /**
     * @var string
     */
    private $entity;
    /**
     * @var string
     */
    private $action;
    /**
     * @var Response
     */
    private $response;
    /**
     * @var Query[]
     */
    private $queries;
    /**
     * @var string
     */
    private $method;

    /**
     * Request constructor.
     * @param string $server
     * @param string $entity
     * @param string $action
     */
    public function __construct(string $server, string $entity, string $action)
    {
        $this->setDomain(Config::SERVER_DOMAIN);
        $this->setServer($server);
        $this->setEntity($entity);
        $this->setAction($action);
        $this->setMethod(Method::GET);
        $this->queries = [];
    }

    public function add_query($key, $value)
    {
        $query = new Query($key, $value);
        $this->queries[] = $query;
    }

    /**
     * @return Response|string
     */
    public function send()
    {
        $url = $this->getDomain() . '/' .
            $this->getServer() . '/' .
            $this->getEntity() . '/' .
            $this->getAction();
        $client = new Client();


        $this->add_query('client_ip', ClientConfig::CLIENT_IP);
        $this->add_query('client_key', ClientConfig::CLIENT_ACCESS_TOKEN);


        try {
            $response = new Response(
                $client->request(
                    $this->getMethod(),
                    $url,
                    ['query' =>
                        $this->getQueries()
                    ]
                )
            );
            return $response;
        } catch (GuzzleException $e) {
            return "Could not make connection to the core server";
        }
    }

    /**
     * @param  $file mixed
     * @param null $instance
     * @return mixed
     */
    public function uploadImage($file, $instance = null)
    {


        $url = $this->getDomain() . '/' .
            $this->getServer() . '/' .
            $this->getEntity() . '/' .
            $this->getAction();

        $client = new Client();

        try {
            $toBeSendParameters = ['multipart' => []];
            if ($file) {
                $image = new Image();
                $image->setName($file->getClientOriginalName());
                $image->setContent($file->getPathname());
                $image->setFileName($file->getPathname());
                $image->setMimeType($file->getMimeType());

                $toBeSendParameters['multipart'][] = [
                    'name' => $image->getName(),
                    'filename' => $image->getFileName(),
                    'Mime-Type' => $image->getMimeType(),
                    'contents' => fopen($image->getContent(), 'r'),
                ];
            }
            $toBeSendParameters['multipart'][] = [
                'name' => 'client_ip',
                'contents' => ClientConfig::CLIENT_IP
            ];
            $toBeSendParameters['multipart'][] = [
                'name' => 'client_key',
                'contents' => ClientConfig::CLIENT_ACCESS_TOKEN
            ];


            if ($instance) {
                $toBeSendParameters['multipart'][] = [
                    'name' => 'instance',
                    'contents' => ModelSerializer::reverse($instance, true),
                ];
            }
            $response = new Response(
                $client->post(
                    $url, $toBeSendParameters
                )
            );
            return $response;
        } catch (GuzzleException $e) {
            return "Could not make connection to the core server";
        }
    }

    /**
     * @return Method
     */
    private function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @param string $method
     */
    public function setMethod(string $method): void
    {
        $this->method = $method;
    }

    /**
     * @return string
     */
    private function getDomain(): string
    {
        return $this->domain;
    }

    /**
     * @return string
     */
    private function getServer(): string
    {
        return $this->server;
    }

    /**
     * @return string
     */
    private function getEntity(): string
    {
        return $this->entity;
    }

    /**
     * @return string
     */
    private function getAction(): string
    {
        return $this->action;
    }

    /**
     * @return Response
     */
    private function getResponse(): Response
    {
        return $this->response;
    }

    /**
     * @return Query[]
     */
    private function getQueries(): array
    {
        $enhancedQueriesArray = [];
        foreach ($this->queries as $query) {
            $enhancedQueriesArray[$query->getKey()] = $query->getValue();
        }
        return $enhancedQueriesArray;
    }

    /**
     * @param string $domain
     */
    private function setDomain(string $domain): void
    {
        $this->domain = $domain;
    }

    /**
     * @param string $server
     */
    private function setServer(string $server): void
    {
        $this->server = $server;
    }

    /**
     * @param string $entity
     */
    private function setEntity(string $entity): void
    {
        $this->entity = $entity;
    }

    /**
     * @param string $action
     */
    private function setAction(string $action): void
    {
        $this->action = $action;
    }

    /**
     * @param Response $response
     */
    private function setResponse(Response $response): void
    {
        $this->response = $response;
    }

    /**
     * @param $object
     * @throws \ReflectionException
     */
    public function add_instance($object)
    {
        $objectClass = get_class($object);
        $reflection = new ReflectionClass($objectClass);
        $vars = $reflection->getProperties(ReflectionProperty::IS_PRIVATE);
        $optionsArray = [];

        foreach ($vars as $var) {
            $propertyName = $var->getName();
            $propertyFinalName = "";
            if (strpos($propertyName, '_')) {
                $exploded = explode('_', $propertyName);
                foreach ($exploded as $key => $item) {
                    if ($key != 0) {
                        $propertyFinalName .= ucfirst($item);
                    } else {
                        $propertyFinalName .= lcfirst($item);
                    }
                }
            } else {
                $propertyFinalName = $var->getName();
            }
            $getterFunctionName = "get" . $propertyFinalName;
            $value = "There is something wrong with request conversion, please check vendor/maticangroup/core_client_api/app/Core/Transaction/Request.php::232";
            $objectValue = $object->{$getterFunctionName}();
//            dd($objectValue);
            if (is_string($objectValue)) {
                $value = (string)$object->{$getterFunctionName}();
            } elseif (is_array($objectValue)) {
                $value = json_encode($object->{$getterFunctionName}());
            } else {
                $value = (string)$object->{$getterFunctionName}();
            }

            $optionsArray[] = [
                'key' => $propertyFinalName,
                'value' => $value
            ];
        }
        foreach ($optionsArray as $option) {
            $this->add_query($option['key'], $option['value']);
        }
    }
}