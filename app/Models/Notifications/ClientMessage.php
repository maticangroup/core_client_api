<?php

namespace Matican\Models\Notifications;

use Matican\Core\Concepts\CRUDActions;
use Matican\Models\Authentication\Client;
use Matican\Models\Repository\Person;
use Matican\Core\DataTypes\DateTime;
use Matican\Core\DataTypes\Text;

class ClientMessage extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param Client
     */
    private $client;

    /**
     * @param Text
     */
    private $message_content;

    /**
     * @param DateTime
     */
    private $create_date;

    /**
     * @param Person
     */
    private $sender;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param Client $client
     * @return ClientMessage
     */
    public function setClient(Client $client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * @return Text
     */
    public function getMessageContent()
    {
        return $this->message_content;
    }

    /**
     * @param Text $message_content
     * @return ClientMessage
     */
    public function setMessageContent(Text $message_content)
    {
        $this->message_content = $message_content;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreateDate()
    {
        return $this->create_date;
    }

    /**
     * @param DateTime $create_date
     * @return ClientMessage
     */
    public function setCreateDate(DateTime $create_date)
    {
        $this->create_date = $create_date;

        return $this;
    }

    /**
     * @return Person
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param Person $sender
     * @return ClientMessage
     */
    public function setSender(Person $sender)
    {
        $this->sender = $sender;

        return $this;
    }
}
