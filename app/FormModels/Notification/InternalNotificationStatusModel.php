<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/22/2019
 * Time: 10:47 AM
 */

namespace App\FormModels\Notification;


class InternalNotificationStatusModel
{
    private $internalNotificationStatusId;
    private $internalNotificationStatusName;
    private $internalNotificationStatusMachineName;
    private $internalNotificationStatusColor;
    private $internalNotificationId;

    /**
     * @return mixed
     */
    public function getInternalNotificationStatusId()
    {
        return $this->internalNotificationStatusId;
    }

    /**
     * @param mixed $internalNotificationStatusId
     */
    public function setInternalNotificationStatusId($internalNotificationStatusId): void
    {
        $this->internalNotificationStatusId = $internalNotificationStatusId;
    }

    /**
     * @return mixed
     */
    public function getInternalNotificationStatusName()
    {
        return $this->internalNotificationStatusName;
    }

    /**
     * @param mixed $internalNotificationStatusName
     */
    public function setInternalNotificationStatusName($internalNotificationStatusName): void
    {
        $this->internalNotificationStatusName = $internalNotificationStatusName;
    }

    /**
     * @return mixed
     */
    public function getInternalNotificationStatusMachineName()
    {
        return $this->internalNotificationStatusMachineName;
    }

    /**
     * @param mixed $internalNotificationStatusMachineName
     */
    public function setInternalNotificationStatusMachineName($internalNotificationStatusMachineName): void
    {
        $this->internalNotificationStatusMachineName = $internalNotificationStatusMachineName;
    }

    /**
     * @return mixed
     */
    public function getInternalNotificationStatusColor()
    {
        return $this->internalNotificationStatusColor;
    }

    /**
     * @param mixed $internalNotificationStatusColor
     */
    public function setInternalNotificationStatusColor($internalNotificationStatusColor): void
    {
        $this->internalNotificationStatusColor = $internalNotificationStatusColor;
    }

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
}