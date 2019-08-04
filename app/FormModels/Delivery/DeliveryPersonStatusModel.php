<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/12/2019
 * Time: 5:43 PM
 */

namespace App\FormModels\Delivery;


class DeliveryPersonStatusModel
{
    private $deliveryPersonStatusId;
    private $deliveryPersonStatusName;
    private $deliveryPersonStatusMachineName;
    private $deliveryPersonStatusColor;
    private $deliveryPersonId;

    /**
     * @return mixed
     */
    public function getDeliveryPersonStatusId()
    {
        return $this->deliveryPersonStatusId;
    }

    /**
     * @param mixed $deliveryPersonStatusId
     */
    public function setDeliveryPersonStatusId($deliveryPersonStatusId): void
    {
        $this->deliveryPersonStatusId = $deliveryPersonStatusId;
    }

    /**
     * @return mixed
     */
    public function getDeliveryPersonStatusName()
    {
        return $this->deliveryPersonStatusName;
    }

    /**
     * @param mixed $deliveryPersonStatusName
     */
    public function setDeliveryPersonStatusName($deliveryPersonStatusName): void
    {
        $this->deliveryPersonStatusName = $deliveryPersonStatusName;
    }

    /**
     * @return mixed
     */
    public function getDeliveryPersonStatusMachineName()
    {
        return $this->deliveryPersonStatusMachineName;
    }

    /**
     * @param mixed $deliveryPersonStatusMachineName
     */
    public function setDeliveryPersonStatusMachineName($deliveryPersonStatusMachineName): void
    {
        $this->deliveryPersonStatusMachineName = $deliveryPersonStatusMachineName;
    }

    /**
     * @return mixed
     */
    public function getDeliveryPersonStatusColor()
    {
        return $this->deliveryPersonStatusColor;
    }

    /**
     * @param mixed $deliveryPersonStatusColor
     */
    public function setDeliveryPersonStatusColor($deliveryPersonStatusColor): void
    {
        $this->deliveryPersonStatusColor = $deliveryPersonStatusColor;
    }

    /**
     * @return mixed
     */
    public function getDeliveryPersonId()
    {
        return $this->deliveryPersonId;
    }

    /**
     * @param mixed $deliveryPersonId
     */
    public function setDeliveryPersonId($deliveryPersonId): void
    {
        $this->deliveryPersonId = $deliveryPersonId;
    }
}