<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/12/2019
 * Time: 12:04 PM
 */

namespace Matican\FormModels\Delivery;


class DispatchModel
{
    private $dispatchId;
    private $dispatchOrderId;
    private $dispatchOrder;
    private $dispatchDeliveryPersonId;
    private $dispatchDeliveryPersonName;
    private $dispatchDeliveryMethodId;
    private $dispatchDeliveryMethodName;
    private $dispatchDeliveryWeekDayId;
    private $dispatchDeliveryWeekDayName;
    private $dispatchDeliveryQueueId;
    private $dispatchDeliveryQueueName;
    private $dispatchCreateDate;
    private $dispatchSerial;
    private $dispatchStatus;
    private $dispatchPriceStatus;
    private $dispatchTotalPrice;
    private $dispatchDeliveryStatus;
    private $dispatchToLocationId;
    private $dispatchDeliveryCost;
    private $dispatchAddress;

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

    /**
     * @return mixed
     */
    public function getDispatchOrderId()
    {
        return $this->dispatchOrderId;
    }

    /**
     * @param mixed $dispatchOrderId
     */
    public function setDispatchOrderId($dispatchOrderId): void
    {
        $this->dispatchOrderId = $dispatchOrderId;
    }

    /**
     * @return mixed
     */
    public function getDispatchOrder()
    {
        return $this->dispatchOrder;
    }

    /**
     * @param mixed $dispatchOrder
     */
    public function setDispatchOrder($dispatchOrder): void
    {
        $this->dispatchOrder = $dispatchOrder;
    }

    /**
     * @return mixed
     */
    public function getDispatchDeliveryPersonId()
    {
        return $this->dispatchDeliveryPersonId;
    }

    /**
     * @param mixed $dispatchDeliveryPersonId
     */
    public function setDispatchDeliveryPersonId($dispatchDeliveryPersonId): void
    {
        $this->dispatchDeliveryPersonId = $dispatchDeliveryPersonId;
    }

    /**
     * @return mixed
     */
    public function getDispatchDeliveryPersonName()
    {
        return $this->dispatchDeliveryPersonName;
    }

    /**
     * @param mixed $dispatchDeliveryPersonName
     */
    public function setDispatchDeliveryPersonName($dispatchDeliveryPersonName): void
    {
        $this->dispatchDeliveryPersonName = $dispatchDeliveryPersonName;
    }

    /**
     * @return mixed
     */
    public function getDispatchDeliveryMethodId()
    {
        return $this->dispatchDeliveryMethodId;
    }

    /**
     * @param mixed $dispatchDeliveryMethodId
     */
    public function setDispatchDeliveryMethodId($dispatchDeliveryMethodId): void
    {
        $this->dispatchDeliveryMethodId = $dispatchDeliveryMethodId;
    }

    /**
     * @return mixed
     */
    public function getDispatchDeliveryMethodName()
    {
        return $this->dispatchDeliveryMethodName;
    }

    /**
     * @param mixed $dispatchDeliveryMethodName
     */
    public function setDispatchDeliveryMethodName($dispatchDeliveryMethodName): void
    {
        $this->dispatchDeliveryMethodName = $dispatchDeliveryMethodName;
    }

    /**
     * @return mixed
     */
    public function getDispatchDeliveryWeekDayId()
    {
        return $this->dispatchDeliveryWeekDayId;
    }

    /**
     * @param mixed $dispatchDeliveryWeekDayId
     */
    public function setDispatchDeliveryWeekDayId($dispatchDeliveryWeekDayId): void
    {
        $this->dispatchDeliveryWeekDayId = $dispatchDeliveryWeekDayId;
    }

    /**
     * @return mixed
     */
    public function getDispatchDeliveryWeekDayName()
    {
        return $this->dispatchDeliveryWeekDayName;
    }

    /**
     * @param mixed $dispatchDeliveryWeekDayName
     */
    public function setDispatchDeliveryWeekDayName($dispatchDeliveryWeekDayName): void
    {
        $this->dispatchDeliveryWeekDayName = $dispatchDeliveryWeekDayName;
    }

    /**
     * @return mixed
     */
    public function getDispatchDeliveryQueueId()
    {
        return $this->dispatchDeliveryQueueId;
    }

    /**
     * @param mixed $dispatchDeliveryQueueId
     */
    public function setDispatchDeliveryQueueId($dispatchDeliveryQueueId): void
    {
        $this->dispatchDeliveryQueueId = $dispatchDeliveryQueueId;
    }

    /**
     * @return mixed
     */
    public function getDispatchDeliveryQueueName()
    {
        return $this->dispatchDeliveryQueueName;
    }

    /**
     * @param mixed $dispatchDeliveryQueueName
     */
    public function setDispatchDeliveryQueueName($dispatchDeliveryQueueName): void
    {
        $this->dispatchDeliveryQueueName = $dispatchDeliveryQueueName;
    }

    /**
     * @return mixed
     */
    public function getDispatchCreateDate()
    {
        return $this->dispatchCreateDate;
    }

    /**
     * @param mixed $dispatchCreateDate
     */
    public function setDispatchCreateDate($dispatchCreateDate): void
    {
        $this->dispatchCreateDate = $dispatchCreateDate;
    }

    /**
     * @return mixed
     */
    public function getDispatchSerial()
    {
        return $this->dispatchSerial;
    }

    /**
     * @param mixed $dispatchSerial
     */
    public function setDispatchSerial($dispatchSerial): void
    {
        $this->dispatchSerial = $dispatchSerial;
    }

    /**
     * @return mixed
     */
    public function getDispatchStatus()
    {
        return $this->dispatchStatus;
    }

    /**
     * @param mixed $dispatchStatus
     */
    public function setDispatchStatus($dispatchStatus): void
    {
        $this->dispatchStatus = $dispatchStatus;
    }

    /**
     * @return mixed
     */
    public function getDispatchPriceStatus()
    {
        return $this->dispatchPriceStatus;
    }

    /**
     * @param mixed $dispatchPriceStatus
     */
    public function setDispatchPriceStatus($dispatchPriceStatus): void
    {
        $this->dispatchPriceStatus = $dispatchPriceStatus;
    }

    /**
     * @return mixed
     */
    public function getDispatchTotalPrice()
    {
        return $this->dispatchTotalPrice;
    }

    /**
     * @param mixed $dispatchTotalPrice
     */
    public function setDispatchTotalPrice($dispatchTotalPrice): void
    {
        $this->dispatchTotalPrice = $dispatchTotalPrice;
    }

    /**
     * @return mixed
     */
    public function getDispatchDeliveryStatus()
    {
        return $this->dispatchDeliveryStatus;
    }

    /**
     * @param mixed $dispatchDeliveryStatus
     */
    public function setDispatchDeliveryStatus($dispatchDeliveryStatus): void
    {
        $this->dispatchDeliveryStatus = $dispatchDeliveryStatus;
    }

    /**
     * @return mixed
     */
    public function getDispatchToLocationId()
    {
        return $this->dispatchToLocationId;
    }

    /**
     * @param mixed $dispatchToLocationId
     */
    public function setDispatchToLocationId($dispatchToLocationId): void
    {
        $this->dispatchToLocationId = $dispatchToLocationId;
    }

    /**
     * @return mixed
     */
    public function getDispatchDeliveryCost()
    {
        return $this->dispatchDeliveryCost;
    }

    /**
     * @param mixed $dispatchDeliveryCost
     */
    public function setDispatchDeliveryCost($dispatchDeliveryCost): void
    {
        $this->dispatchDeliveryCost = $dispatchDeliveryCost;
    }

    /**
     * @return mixed
     */
    public function getDispatchAddress()
    {
        return $this->dispatchAddress;
    }

    /**
     * @param mixed $dispatchAddress
     */
    public function setDispatchAddress($dispatchAddress): void
    {
        $this->dispatchAddress = $dispatchAddress;
    }
}