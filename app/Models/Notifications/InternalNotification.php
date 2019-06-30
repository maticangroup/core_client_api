<?php

namespace App\Models\Notifications;

use App\Core\Concepts\CRUDActions;
use App\Models\Repository\Person;
use App\Core\DataTypes\Text;

class InternalNotification extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param Text
     */
    private $topic;

    /**
     * @param Text
     */
    private $message;

    /**
     * @param Person
     */
    private $owner;

    /**
     * @param InternalNotificationOrigin
     */
    private $internalNotificationOrigin;

    /**
     * @param InternalNotificationStatus
     */
    private $internalNotificationStatus;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Text
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * @param Text $topic
     * @return InternalNotification
     */
    public function setTopic(Text $topic)
    {
        $this->topic = $topic;

        return $this;
    }

    /**
     * @return Text
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param Text $message
     * @return InternalNotification
     */
    public function setMessage(Text $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return Person
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param Person $owner
     * @return $this
     */
    public function setOwner(Person $owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * @return InternalNotificationOrigin
     */
    public function getInternalNotificationOrigin()
    {
        return $this->internalNotificationOrigin;
    }

    /**
     * @param InternalNotificationOrigin $internalNotificationOrigin
     * @return $this
     */
    public function setInternalNotificationOrigin(InternalNotificationOrigin $internalNotificationOrigin)
    {
        $this->internalNotificationOrigin = $internalNotificationOrigin;

        return $this;
    }

    /**
     * @return InternalNotificationStatus|null
     */
    public function getInternalNotificationStatus()
    {
        return $this->internalNotificationStatus;
    }

    /**
     * @param InternalNotificationStatus $internalNotificationStatus
     * @return InternalNotification
     */
    public function setInternalNotificationStatus(InternalNotificationStatus $internalNotificationStatus)
    {
        $this->internalNotificationStatus = $internalNotificationStatus;

        return $this;
    }

    /**
     * @param $machineName
     * @return string
     */
    public function changeInternalNotificationStatus($machineName)
    {
        return "";
    }
}
