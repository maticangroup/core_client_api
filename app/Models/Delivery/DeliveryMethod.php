<?php

namespace App\Models\Delivery;

use App\Core\Concepts\CRUDActions;
use App\Models\Repository\Size;
use App\Models\Repository\WeekDays;
use App\Core\DataTypes\Money;
use App\Core\DataTypes\Text;

class DeliveryMethod extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param string
     */
    private $name;

    /**
     * @param Money
     */
    private $cost;

    /**
     * @param boolean
     */
    private $can_receive_money;

    /**
     * @param Text
     */
    private $description;
    /**
     * @todo Image should be added here when media is finished
     */
    /**
     * @param DeliveryMethodCostType
     */
    private $deliveryMethodCostType;

    /**
     * @param DeliveryPerson
     */
//    private $deliveryPeople;

    /**
     * @param Dispatch
     */
//    private $dispatches;

    /**
     * @param Queue
     */
//    private $queues;

    /**
     * @param Size
     */
//    private $allowed_sizes;

    /**
     * @param WeekDays
     */
//    private $available_days;

    public function __construct()
    {
//        $this->deliveryPeople = [];
//        $this->dispatches = [];
//        $this->queues = [];
//        $this->allowed_sizes = [];
//        $this->available_days = [];
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return DeliveryMethod
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Money
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param Money $cost
     * @return $this
     */
    public function setCost(Money $cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * @return bool
     */
    public function getCanReceiveMoney()
    {
        return $this->can_receive_money;
    }

    /**
     * @param bool $can_receive_money
     * @return DeliveryMethod
     */
    public function setCanReceiveMoney(bool $can_receive_money)
    {
        $this->can_receive_money = $can_receive_money;

        return $this;
    }

    /**
     * @return Text
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param Text $description
     * @return DeliveryMethod
     */
    public function setDescription(Text $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return DeliveryMethodCostType
     */
    public function getDeliveryMethodCostType()
    {
        return $this->deliveryMethodCostType;
    }

    /**
     * @param DeliveryMethodCostType $deliveryMethodCostType
     * @return DeliveryMethod
     */
    public function setDeliveryMethodCostType(DeliveryMethodCostType $deliveryMethodCostType)
    {
        $this->deliveryMethodCostType = $deliveryMethodCostType;

        return $this;
    }

    /**
     * @return DeliveryPerson[]
     */
    public function getDeliveryPeople()
    {
//        return $this->deliveryPeople;
    }

    /**
     * @return Dispatch[]
     */
    public function getDispatches()
    {
//        return $this->dispatches;
    }

    /**
     * @return Queue[]
     */
    public function getQueues()
    {
//        return $this->queues;
    }

    /**
     * @return Size[]
     */
    public function getAllowedSizes()
    {
//        return $this->allowed_sizes;
    }

    /**
     * @return WeekDays[]
     */
    public function getAvailableDays()
    {
//        return $this->available_days;
    }

    /**
     * @param $machineName
     * @return string
     */
    public function changeDeliveryMethodCostType($machineName)
    {
        return "";
    }

    public function addDeliveryPerson()
    {
        return "";
    }

    public function removeDeliveryPerson()
    {
        return "";
    }

    public function addQueue()
    {
        return "";
    }

    public function removeQueue()
    {
        return "";
    }
}
