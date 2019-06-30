<?php
/**
 * Created by PhpStorm.
 * User: hossein
 * Date: 01/06/19
 * Time: 11:12
 */

namespace Matican\Core\Transaction;


//use Guzzle\Http\Client;

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
        $decoded = (array)json_decode($response->getBody());
        $this->setStatus($decoded['status']);
        $this->setContent((array)$decoded['response']);
        $this->setMessage(($decoded['message']) ? $decoded['message'] : " ");
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