<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/15/2019
 * Time: 11:30 AM
 */

namespace App\FormModels\Delivery;


class AvailableQueuesModel
{
    private $deliveryMethodId;
    private $dispatchId;
    private $todayDateTime;
    private $daysRange;
    private $weekDays;

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
    public function getTodayDateTime()
    {
        return $this->todayDateTime;
    }

    /**
     */
    public function setTodayDateTime(): void
    {
        $now = new \DateTime('now');
        $date = $now->format('Y-n-d H:i');
        $this->todayDateTime = $date;
    }

    /**
     * @return mixed
     */
    public function getDaysRange()
    {
        return $this->daysRange;
    }

    /**
     * @param mixed $daysRange
     */
    public function setDaysRange($daysRange): void
    {
        $this->daysRange = $daysRange;
    }

    /**
     * @return mixed
     */
    public function getWeekDays()
    {
        return $this->weekDays;
    }

    /**
     * @param mixed $weekDays
     */
    public function setWeekDays($weekDays): void
    {
        $this->weekDays = $weekDays;
    }
}