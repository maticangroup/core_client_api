<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/12/2019
 * Time: 12:01 PM
 */

namespace App\FormModels\Delivery;


class DeliveryMethodStatusModel
{
    private $deliveryMethodStatusId;
    private $deliveryMethodStatusName;
    private $deliveryMethodStatusMachineName;
    private $deliveryMethodStatusColor;
    private $deliveryMethodId;

    /**
     * @return mixed
     */
    public function getDeliveryMethodStatusId()
    {
        return $this->deliveryMethodStatusId;
    }

    /**
     * @param mixed $deliveryMethodStatusId
     */
    public function setDeliveryMethodStatusId($deliveryMethodStatusId): void
    {
        $this->deliveryMethodStatusId = $deliveryMethodStatusId;
    }

    /**
     * @return mixed
     */
    public function getDeliveryMethodStatusName()
    {
        return $this->deliveryMethodStatusName;
    }

    /**
     * @param mixed $deliveryMethodStatusName
     */
    public function setDeliveryMethodStatusName($deliveryMethodStatusName): void
    {
        $this->deliveryMethodStatusName = $deliveryMethodStatusName;
    }

    /**
     * @return mixed
     */
    public function getDeliveryMethodStatusMachineName()
    {
        return $this->deliveryMethodStatusMachineName;
    }

    /**
     * @param mixed $deliveryMethodStatusMachineName
     */
    public function setDeliveryMethodStatusMachineName($deliveryMethodStatusMachineName): void
    {
        $this->deliveryMethodStatusMachineName = $deliveryMethodStatusMachineName;
    }

    /**
     * @return mixed
     */
    public function getDeliveryMethodStatusColor()
    {
        return $this->deliveryMethodStatusColor;
    }

    /**
     * @param mixed $deliveryMethodStatusColor
     */
    public function setDeliveryMethodStatusColor($deliveryMethodStatusColor): void
    {
        $this->deliveryMethodStatusColor = $deliveryMethodStatusColor;
    }

    /**
     * @return mixed
     */
    public function getDeliveryMethodId()
    {
        return $this->deliveryMethodId;
    }

    /**
     * @param mixed $deliveryMethodId
     */
    public function setDeliveryMethodId($deliveryMethodId): void
    {
        $this->deliveryMethodId = $deliveryMethodId;
    }
}