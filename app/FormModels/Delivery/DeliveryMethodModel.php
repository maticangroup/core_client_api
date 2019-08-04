<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/12/2019
 * Time: 10:31 AM
 */

namespace Matican\FormModels\Delivery;


class DeliveryMethodModel
{
    private $deliveryMethodId;
    private $deliveryMethodName;
    private $deliveryMethodSizes;
    private $deliveryMethodTypeId;
    private $deliveryMethodTypeName;
    private $deliveryMethodTypeMachineName;
    private $deliveryMethodCost;
    private $deliveryMethodLogoUrl;
    private $deliveryMethodDescription;
    private $deliveryMethodReceiveMoney;
    private $deliveryMethodPersons;
    private $deliveryMethodWeekDays;
    private $deliveryMethodContent;
    private $deliveryMethodStatus;
    private $deliveryMethodDeliveryPersonsCount;
    private $deliveryMethodDispatchesCount;
    private $dispatchId;
    private $thumbnail;

    /**
     * @return mixed
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * @param mixed $thumbnail
     */
    public function setThumbnail($thumbnail): void
    {
        $this->thumbnail = $thumbnail;
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

    /**
     * @return mixed
     */
    public function getDeliveryMethodName()
    {
        return $this->deliveryMethodName;
    }

    /**
     * @param mixed $deliveryMethodName
     */
    public function setDeliveryMethodName($deliveryMethodName): void
    {
        $this->deliveryMethodName = $deliveryMethodName;
    }

    /**
     * @return mixed
     */
    public function getDeliveryMethodSizes()
    {
        return $this->deliveryMethodSizes;
    }

    /**
     * @param mixed $deliveryMethodSizes
     */
    public function setDeliveryMethodSizes($deliveryMethodSizes): void
    {
        $this->deliveryMethodSizes = $deliveryMethodSizes;
    }

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
    public function getDeliveryMethodCost()
    {
        return $this->deliveryMethodCost;
    }

    /**
     * @param mixed $deliveryMethodCost
     */
    public function setDeliveryMethodCost($deliveryMethodCost): void
    {
        $this->deliveryMethodCost = $deliveryMethodCost;
    }

    /**
     * @return mixed
     */
    public function getDeliveryMethodLogoUrl()
    {
        return $this->deliveryMethodLogoUrl;
    }

    /**
     * @param mixed $deliveryMethodLogoUrl
     */
    public function setDeliveryMethodLogoUrl($deliveryMethodLogoUrl): void
    {
        $this->deliveryMethodLogoUrl = $deliveryMethodLogoUrl;
    }

    /**
     * @return mixed
     */
    public function getDeliveryMethodDescription()
    {
        return $this->deliveryMethodDescription;
    }

    /**
     * @param mixed $deliveryMethodDescription
     */
    public function setDeliveryMethodDescription($deliveryMethodDescription): void
    {
        $this->deliveryMethodDescription = $deliveryMethodDescription;
    }

    /**
     * @return mixed
     */
    public function getDeliveryMethodReceiveMoney()
    {
        return $this->deliveryMethodReceiveMoney;
    }

    /**
     * @param mixed $deliveryMethodReceiveMoney
     */
    public function setDeliveryMethodReceiveMoney($deliveryMethodReceiveMoney): void
    {
        $this->deliveryMethodReceiveMoney = $deliveryMethodReceiveMoney;
    }

    /**
     * @return mixed
     */
    public function getDeliveryMethodPersons()
    {
        return $this->deliveryMethodPersons;
    }

    /**
     * @param mixed $deliveryMethodPersons
     */
    public function setDeliveryMethodPersons($deliveryMethodPersons): void
    {
        $this->deliveryMethodPersons = $deliveryMethodPersons;
    }

    /**
     * @return mixed
     */
    public function getDeliveryMethodWeekDays()
    {
        return $this->deliveryMethodWeekDays;
    }

    /**
     * @param mixed $deliveryMethodWeekDays
     */
    public function setDeliveryMethodWeekDays($deliveryMethodWeekDays): void
    {
        $this->deliveryMethodWeekDays = $deliveryMethodWeekDays;
    }

    /**
     * @return mixed
     */
    public function getDeliveryMethodContent()
    {
        return $this->deliveryMethodContent;
    }

    /**
     * @param mixed $deliveryMethodContent
     */
    public function setDeliveryMethodContent($deliveryMethodContent): void
    {
        $this->deliveryMethodContent = $deliveryMethodContent;
    }

    /**
     * @return mixed
     */
    public function getDeliveryMethodStatus()
    {
        return $this->deliveryMethodStatus;
    }

    /**
     * @param mixed $deliveryMethodStatus
     */
    public function setDeliveryMethodStatus($deliveryMethodStatus): void
    {
        $this->deliveryMethodStatus = $deliveryMethodStatus;
    }

    /**
     * @return mixed
     */
    public function getDeliveryMethodDeliveryPersonsCount()
    {
        return $this->deliveryMethodDeliveryPersonsCount;
    }

    /**
     * @param mixed $deliveryMethodDeliveryPersonsCount
     */
    public function setDeliveryMethodDeliveryPersonsCount($deliveryMethodDeliveryPersonsCount): void
    {
        $this->deliveryMethodDeliveryPersonsCount = $deliveryMethodDeliveryPersonsCount;
    }

    /**
     * @return mixed
     */
    public function getDeliveryMethodDispatchesCount()
    {
        return $this->deliveryMethodDispatchesCount;
    }

    /**
     * @param mixed $deliveryMethodDispatchesCount
     */
    public function setDeliveryMethodDispatchesCount($deliveryMethodDispatchesCount): void
    {
        $this->deliveryMethodDispatchesCount = $deliveryMethodDispatchesCount;
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