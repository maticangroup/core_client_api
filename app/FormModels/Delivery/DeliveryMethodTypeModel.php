<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/12/2019
 * Time: 5:03 PM
 */

namespace App\FormModels\Delivery;


class DeliveryMethodTypeModel
{
    private $deliveryMethodTypeId;
    private $deliveryMethodTypeName;
    private $deliveryMethodTypeMachineName;
    private $deliveryMethodId;

    /**
     * @return mixed
     */
    public function getDeliveryMethodTypeId()
    {
        return $this->deliveryMethodTypeId;
    }

    /**
     * @param mixed $deliveryMethodTypeId
     */
    public function setDeliveryMethodTypeId($deliveryMethodTypeId): void
    {
        $this->deliveryMethodTypeId = $deliveryMethodTypeId;
    }

    /**
     * @return mixed
     */
    public function getDeliveryMethodTypeName()
    {
        return $this->deliveryMethodTypeName;
    }

    /**
     * @param mixed $deliveryMethodTypeName
     */
    public function setDeliveryMethodTypeName($deliveryMethodTypeName): void
    {
        $this->deliveryMethodTypeName = $deliveryMethodTypeName;
    }

    /**
     * @return mixed
     */
    public function getDeliveryMethodTypeMachineName()
    {
        return $this->deliveryMethodTypeMachineName;
    }

    /**
     * @param mixed $deliveryMethodTypeMachineName
     */
    public function setDeliveryMethodTypeMachineName($deliveryMethodTypeMachineName): void
    {
        $this->deliveryMethodTypeMachineName = $deliveryMethodTypeMachineName;
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