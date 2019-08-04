<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/22/2019
 * Time: 10:41 AM
 */

namespace App\FormModels\Notification;


class ClientMessageModel
{
    private $clientMessageId;
    private $clientMessagePersonName;
    private $clientMessagePersonFamily;
    private $clientMessagePersonPhone;
    private $clientMessagePersonEmail;
    private $clientMessageSubject;
    private $clientMessageMessage;
    private $clientMessageFrom;

    /**
     * @return mixed
     */
    public function getClientMessageId()
    {
        return $this->clientMessageId;
    }

    /**
     * @param mixed $clientMessageId
     */
    public function setClientMessageId($clientMessageId): void
    {
        $this->clientMessageId = $clientMessageId;
    }

    /**
     * @return mixed
     */
    public function getClientMessagePersonName()
    {
        return $this->clientMessagePersonName;
    }

    /**
     * @param mixed $clientMessagePersonName
     */
    public function setClientMessagePersonName($clientMessagePersonName): void
    {
        $this->clientMessagePersonName = $clientMessagePersonName;
    }

    /**
     * @return mixed
     */
    public function getClientMessagePersonFamily()
    {
        return $this->clientMessagePersonFamily;
    }

    /**
     * @param mixed $clientMessagePersonFamily
     */
    public function setClientMessagePersonFamily($clientMessagePersonFamily): void
    {
        $this->clientMessagePersonFamily = $clientMessagePersonFamily;
    }

    /**
     * @return mixed
     */
    public function getClientMessagePersonPhone()
    {
        return $this->clientMessagePersonPhone;
    }

    /**
     * @param mixed $clientMessagePersonPhone
     */
    public function setClientMessagePersonPhone($clientMessagePersonPhone): void
    {
        $this->clientMessagePersonPhone = $clientMessagePersonPhone;
    }

    /**
     * @return mixed
     */
    public function getClientMessagePersonEmail()
    {
        return $this->clientMessagePersonEmail;
    }

    /**
     * @param mixed $clientMessagePersonEmail
     */
    public function setClientMessagePersonEmail($clientMessagePersonEmail): void
    {
        $this->clientMessagePersonEmail = $clientMessagePersonEmail;
    }

    /**
     * @return mixed
     */
    public function getClientMessageSubject()
    {
        return $this->clientMessageSubject;
    }

    /**
     * @param mixed $clientMessageSubject
     */
    public function setClientMessageSubject($clientMessageSubject): void
    {
        $this->clientMessageSubject = $clientMessageSubject;
    }

    /**
     * @return mixed
     */
    public function getClientMessageMessage()
    {
        return $this->clientMessageMessage;
    }

    /**
     * @param mixed $clientMessageMessage
     */
    public function setClientMessageMessage($clientMessageMessage): void
    {
        $this->clientMessageMessage = $clientMessageMessage;
    }

    /**
     * @return mixed
     */
    public function getClientMessageFrom()
    {
        return $this->clientMessageFrom;
    }

    /**
     * @param mixed $clientMessageFrom
     */
    public function setClientMessageFrom($clientMessageFrom): void
    {
        $this->clientMessageFrom = $clientMessageFrom;
    }
}