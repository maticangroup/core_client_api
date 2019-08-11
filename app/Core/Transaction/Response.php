<?php
/**
 * Created by PhpStorm.
 * User: hossein
 * Date: 01/06/19
 * Time: 11:12
 */

namespace Matican\Core\Transaction;


//use Guzzle\Http\Client;

use Matican\Settings;

class Response
{
    /**
     * @var $status integer
     */
    private $status;
    /**
     * @var string
     */
    private $content;
    /**
     * @var string
     */
    private $message;


    /**
     * Response constructor.
     * @param $response \GuzzleHttp\Psr7\Response
     */
    public function __construct($response)
    {
        $decoded = json_decode($response->getBody()->getContents(), true);
        if (isset($decoded['status']))
            $this->setStatus($decoded['status']);
        else
            $this->setStatus(null);
        if (isset($decoded['response']))
            $this->setContent((array)$decoded['response']);
        else
            $this->setContent(null);

        $this->setMessage(($decoded['message']) ? $decoded['message'] : "");

        if ($this->getStatus() === \Matican\ResponseStatus::authentication_session_expired) {
            if (Settings::get('LOGIN_PAGE_URL')) {
                header(
                    'Location: http://' .
                    Settings::get('APPLICATION_DOMAIN') . '/' .
                    Settings::get('LOGIN_PAGE_URL')
                );
                die;
            }
        }
        return $this;
    }


    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getContent(): array
    {
        return $this->content;
    }

    /**
     * @param array $content
     */
    public function setContent(array $content): void
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

}