<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/12/2019
 * Time: 11:35 AM
 */

namespace Matican\FormModels\Delivery;


class QueueModel
{
    private $queueId;
    private $queueFrom;
    private $queueTo;
    private $queueCapacity;
    private $queueStatus;
    private $weekDayId;
    private $dispatchesCount;
    private $deliveryMethodId;
    private $dispatchId;
    private $leftCount;
    private $queueDueDate;

    /**
     * @return mixed
     */
    public function getQueueId()
    {
        return $this->queueId;
    }

    /**
     * @param mixed $queueId
     */
    public function setQueueId($queueId): void
    {
        $this->queueId = $queueId;
    }

    /**
     * @return mixed
     */
    public function getQueueFrom()
    {
        return $this->queueFrom;
    }

    /**
     * @param mixed $queueFrom
     */
    public function setQueueFrom($queueFrom): void
    {
        $this->queueFrom = $queueFrom;
    }

    /**
     * @return mixed
     */
    public function getQueueTo()
    {
        return $this->queueTo;
    }

    /**
     * @param mixed $queueTo
     */
    public function setQueueTo($queueTo): void
    {
        $this->queueTo = $queueTo;
    }

    /**
     * @return mixed
     */
    public function getQueueCapacity()
    {
        return $this->queueCapacity;
    }

    /**
     * @param mixed $queueCapacity
     */
    public function setQueueCapacity($queueCapacity): void
    {
        $this->queueCapacity = $queueCapacity;
    }

    /**
     * @return mixed
     */
    public function getQueueStatus()
    {
        return $this->queueStatus;
    }

    /**
     * @param mixed $queueStatus
     */
    public function setQueueStatus($queueStatus): void
    {
        $this->queueStatus = $queueStatus;
    }

    /**
     * @return mixed
     */
    public function getWeekDayId()
    {
        return $this->weekDayId;
    }

    /**
     * @param mixed $weekDayId
     */
    public function setWeekDayId($weekDayId): void
    {
        $this->weekDayId = $weekDayId;
    }

    /**
     * @return mixed
     */
    public function getDispatchesCount()
    {
        return $this->dispatchesCount;
    }

    /**
     * @param mixed $dispatchesCount
     */
    public function setDispatchesCount($dispatchesCount): void
    {
        $this->dispatchesCount = $dispatchesCount;
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
    public function getLeftCount()
    {
        return $this->leftCount;
    }

    /**
     * @param mixed $leftCount
     */
    public function setLeftCount($leftCount): void
    {
        $this->leftCount = $leftCount;
    }

    /**
     * @return mixed
     */
    public function getQueueDueDate()
    {
        return $this->queueDueDate;
    }

    /**
     * @param mixed $queueDueDate
     */
    public function setQueueDueDate($queueDueDate): void
    {
        $this->queueDueDate = $queueDueDate;
    }
}