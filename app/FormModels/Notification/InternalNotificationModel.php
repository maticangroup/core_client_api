<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/22/2019
 * Time: 10:46 AM
 */

namespace App\FormModels\Notification;


class InternalNotificationModel
{
    private $internalNotificationId;
    private $internalNotificationMessage;
    private $internalNotificationFromId;
    private $internalNotificationFromName;
    private $internalNotificationToId;
    private $internalNotificationToName;
    private $internalNotificationStatus;
    private $internalNotificationCount;

    /**
     * @return mixed
     */
    public function getInternalNotificationId()
    {
        return $this->internalNotificationId;
    }

    /**
     * @param mixed $internalNotificationId
     */
    public function setInternalNotificationId($internalNotificationId): void
    {
        $this->internalNotificationId = $internalNotificationId;
    }

    /**
     * @return mixed
     */
    public function getInternalNotificationMessage()
    {
        return $this->internalNotificationMessage;
    }

    /**
     * @param mixed $internalNotificationMessage
     */
    public function setInternalNotificationMessage($internalNotificationMessage): void
    {
        $this->internalNotificationMessage = $internalNotificationMessage;
    }

    /**
     * @return mixed
     */
    public function getInternalNotificationFromId()
    {
        return $this->internalNotificationFromId;
    }

    /**
     * @param mixed $internalNotificationFromId
     */
    public function setInternalNotificationFromId($internalNotificationFromId): void
    {
        $this->internalNotificationFromId = $internalNotificationFromId;
    }

    /**
     * @return mixed
     */
    public function getInternalNotificationFromName()
    {
        return $this->internalNotificationFromName;
    }

    /**
     * @param mixed $internalNotificationFromName
     */
    public function setInternalNotificationFromName($internalNotificationFromName): void
    {
        $this->internalNotificationFromName = $internalNotificationFromName;
    }

    /**
     * @return mixed
     */
    public function getInternalNotificationToId()
    {
        return $this->internalNotificationToId;
    }

    /**
     * @param mixed $internalNotificationToId
     */
    public function setInternalNotificationToId($internalNotificationToId): void
    {
        $this->internalNotificationToId = $internalNotificationToId;
    }

    /**
     * @return mixed
     */
    public function getInternalNotificationToName()
    {
        return $this->internalNotificationToName;
    }

    /**
     * @param mixed $internalNotificationToName
     */
    public function setInternalNotificationToName($internalNotificationToName): void
    {
        $this->internalNotificationToName = $internalNotificationToName;
    }

    /**
     * @return mixed
     */
    public function getInternalNotificationStatus()
    {
        return $this->internalNotificationStatus;
    }

    /**
     * @param mixed $internalNotificationStatus
     */
    public function setInternalNotificationStatus($internalNotificationStatus): void
    {
        $this->internalNotificationStatus = $internalNotificationStatus;
    }

    /**
     * @return mixed
     */
    public function getInternalNotificationCount()
    {
        return $this->internalNotificationCount;
    }

    /**
     * @param mixed $internalNotificationCount
     */
    public function setInternalNotificationCount($internalNotificationCount): void
    {
        $this->internalNotificationCount = $internalNotificationCount;
    }
}