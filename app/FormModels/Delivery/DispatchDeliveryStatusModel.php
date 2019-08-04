<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/16/2019
 * Time: 10:29 AM
 */

namespace App\FormModels\Delivery;


class DispatchDeliveryStatusModel
{
    private $dispatchDeliveryStatusId;
    private $dispatchDeliveryStatusName;
    private $dispatchDeliveryStatusMachineName;
    private $dispatchDeliveryStatusColor;
    private $dispatchId;

    /**
     * @return mixed
     */
    public function getDispatchDeliveryStatusId()
    {
        return $this->dispatchDeliveryStatusId;
    }

    /**
     * @param mixed $dispatchDeliveryStatusId
     */
    public function setDispatchDeliveryStatusId($dispatchDeliveryStatusId): void
    {
        $this->dispatchDeliveryStatusId = $dispatchDeliveryStatusId;
    }

    /**
     * @return mixed
     */
    public function getDispatchDeliveryStatusName()
    {
        return $this->dispatchDeliveryStatusName;
    }

    /**
     * @param mixed $dispatchDeliveryStatusName
     */
    public function setDispatchDeliveryStatusName($dispatchDeliveryStatusName): void
    {
        $this->dispatchDeliveryStatusName = $dispatchDeliveryStatusName;
    }

    /**
     * @return mixed
     */
    public function getDispatchDeliveryStatusMachineName()
    {
        return $this->dispatchDeliveryStatusMachineName;
    }

    /**
     * @param mixed $dispatchDeliveryStatusMachineName
     */
    public function setDispatchDeliveryStatusMachineName($dispatchDeliveryStatusMachineName): void
    {
        $this->dispatchDeliveryStatusMachineName = $dispatchDeliveryStatusMachineName;
    }

    /**
     * @return mixed
     */
    public function getDispatchDeliveryStatusColor()
    {
        return $this->dispatchDeliveryStatusColor;
    }

    /**
     * @param mixed $dispatchDeliveryStatusColor
     */
    public function setDispatchDeliveryStatusColor($dispatchDeliveryStatusColor): void
    {
        $this->dispatchDeliveryStatusColor = $dispatchDeliveryStatusColor;
    }

    /**
     * @return mixed
     */
    public function getDispatchId()
    {
        return $this->dispatchId;
    }

    /**
     * @param mixed $dispatchId
     */
    public function setDispatchId($dispatchId): void
    {
        $this->dispatchId = $dispatchId;
    }
}