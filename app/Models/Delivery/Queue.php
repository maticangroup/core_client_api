<?php

namespace App\Models\Delivery;

use App\Core\Concepts\CRUDActions;
use App\Models\Repository\Person;
use App\Models\Repository\Size;
use App\Models\Repository\WeekDays;
use App\Models\Sale\ShelveDeed;
use App\Core\DataTypes\Time;


class Queue extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param Time
     */
    private $from_time;

    /**
     * @param Time
     */
    private $to_time;

    /**
     * @param integer
     */
    private $capacity;

    /**
     * @param DeliveryMethod
     */
    private $delivery_method;

    /**
     * @param Size
     */
//    private $allowed_sizes;

    /**
     * @param Person
     */
    private $queue_keeper;

    /**
     * @param Dispatch
     */
//    private $dispatches;

    /**
     * @param ShelveDeed
     */
//    private $shelve_deed_to;

    /**
     * @param Person
     */
//    private $available_delivery_people;

    /**
     * @param WeekDays
     */
    private $week_day;

    public function __construct()
    {
//        $this->allowed_sizes = [];
//        $this->dispatches = [];
//        $this->shelve_deed_to = [];
//        $this->available_delivery_people = [];
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Time
     */
    public function getFromTime()
    {
        return $this->from_time;
    }

    /**
     * @param Time $from_time
     * @return Queue
     */
    public function setFromTime(Time $from_time)
    {
        $this->from_time = $from_time;

        return $this;
    }

    /**
     * @return Time
     */
    public function getToTime()
    {
        return $this->to_time;
    }

    /**
     * @param Time $to_time
     * @return Queue
     */
    public function setToTime(Time $to_time)
    {
        $this->to_time = $to_time;

        return $this;
    }

    /**
     * @return integer
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * @param integer $capacity
     * @return Queue
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * @return DeliveryMethod
     */
    public function getDeliveryMethod()
    {
        return $this->delivery_method;
    }

    /**
     * @param DeliveryMethod $delivery_method
     * @return $this
     */
    public function setDeliveryMethod(DeliveryMethod $delivery_method)
    {
        $this->delivery_method = $delivery_method;

        return $this;
    }

    /**
     * @return Size[]
     */
    public function getAllowedSizes()
    {
//        return $this->allowed_sizes;
    }

    /**
     * @return Person
     */
    public function getQueueKeeper()
    {
        return $this->queue_keeper;
    }

    /**
     * @param Person $queue_keeper
     * @return Queue
     */
    public function setQueueKeeper(Person $queue_keeper)
    {
        $this->queue_keeper = $queue_keeper;

        return $this;
    }

    /**
     * @return Dispatch[]
     */
    public function getDispatches()
    {
//        return $this->dispatches;
    }

    /**
     * @return ShelveDeed[]
     */
    public function getShelveDeedTo()
    {
//        return $this->shelve_deed_to;
    }

    /**
     * @return Person[]
     */
    public function getAvailableDeliveryPeople()
    {
//        return $this->available_delivery_people;
    }

    /**
     * @return WeekDays
     */
    public function getWeekDay()
    {
        return $this->week_day;
    }

    /**
     * @param WeekDays $week_day
     */
    public function setWeekDay(WeekDays $week_day)
    {
        $this->week_day = $week_day;
    }
}
