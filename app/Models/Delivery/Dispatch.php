<?php

namespace App\Models\Delivery;

use App\Core\Concepts\CRUDActions;
use App\Models\Repository\Location;
use App\Models\Repository\Person;
use App\Models\Repository\Size;
use App\Models\Sale\SaleOrder;
use App\Core\DataTypes\DateTime;
use App\Core\DataTypes\Money;

class Dispatch extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param Location
     */
    private $from_location;

    /**
     * @param Location
     */
    private $to_location;

    /**
     * @param Person
     */
    private $delivery_person;

    /**
     * @param Money
     */
    private $dispatch_cost;

    /**
     * @param DateTime
     */
    private $delivery_due_date;

    /**
     * @param DeliveryMethod
     */
    private $delivery_method;


    /**
     * @param Size
     */
    private $size;

    /**
     * @param DateTime
     */
    private $create_date;

    /**
     * @param Person
     */
    private $owner;

    /**
     * @param SaleOrder
     */
    private $delivery_order;

    /**
     * @param DispatchStatus
     */
    private $dispatchStatus;

    /**
     * @param Queue
     */
    private $queue;

    /**
     * @param DeliveryCostStatus
     */
    private $cost_status;


    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Location
     */
    public function getFromLocation()
    {
        return $this->from_location;
    }

    /**
     * @param Location $from_location
     * @return $this
     */
    public function setFromLocation(Location $from_location)
    {
        $this->from_location = $from_location;

        return $this;
    }

    /**
     * @return Location
     */
    public function getToLocation()
    {
        return $this->to_location;
    }

    /**
     * @param Location $to_location
     * @return $this
     */
    public function setToLocation(Location $to_location)
    {
        $this->to_location = $to_location;

        return $this;
    }

    /**
     * @return DeliveryPerson
     */
    public function getDeliveryPerson()
    {
        return $this->delivery_person;
    }

    /**
     * @param DeliveryPerson $delivery_person
     * @return $this
     */
    public function setDeliveryPerson(DeliveryPerson $delivery_person)
    {
        $this->delivery_person = $delivery_person;

        return $this;
    }

    /**
     * @return Money
     */
    public function getDispatchCost()
    {
        return $this->dispatch_cost;
    }

    /**
     * @param Money $dispatch_cost
     * @return Dispatch
     */
    public function setDispatchCost(Money $dispatch_cost)
    {
        $this->dispatch_cost = $dispatch_cost;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDeliveryDueDate()
    {
        return $this->delivery_due_date;
    }

    /**
     * @param DateTime $delivery_due_date
     * @return Dispatch
     */
    public function setDeliveryDueDate(DateTime $delivery_due_date)
    {
        $this->delivery_due_date = $delivery_due_date;

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
     * @return Size
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param Size $size
     * @return Dispatch
     */
    public function setSize(Size $size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreateDate()
    {
        return $this->create_date;
    }

    /**
     * @param DateTime $create_date
     * @return Dispatch
     */
    public function setCreateDate(DateTime $create_date)
    {
        $this->create_date = $create_date;

        return $this;
    }

    /**
     * @return Person
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param Person $owner
     * @return Dispatch
     */
    public function setOwner(Person $owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * @return SaleOrder
     */
    public function getDeliveryOrder()
    {
        return $this->delivery_order;
    }

    /**
     * @param SaleOrder $delivery_order
     * @return Dispatch
     */
    public function setDeliveryOrder(SaleOrder $delivery_order)
    {
        $this->delivery_order = $delivery_order;

        return $this;
    }

    /**
     * @return DispatchStatus
     */
    public function getDispatchStatus()
    {
        return $this->dispatchStatus;
    }

    /**
     * @param DispatchStatus $dispatchStatus
     * @return Dispatch
     */
    public function setDispatchStatus(DispatchStatus $dispatchStatus)
    {
        $this->dispatchStatus = $dispatchStatus;

        return $this;
    }

    /**
     * @return Queue
     */
    public function getQueue()
    {
        return $this->queue;
    }

    /**
     * @param Queue $queue
     * @return Dispatch
     */
    public function setQueue(Queue $queue)
    {
        $this->queue = $queue;

        return $this;
    }

    /**
     * @return DeliveryCostStatus
     */
    public function getCostStatus()
    {
        return $this->cost_status;
    }

    /**
     * @param DeliveryCostStatus $cost_status
     * @return Dispatch
     */
    public function setCostStatus(DeliveryCostStatus $cost_status)
    {
        $this->cost_status = $cost_status;

        return $this;
    }

    /**
     * @param $machineName
     * @return string
     */
    public function changeDispatchStatus($machineName)
    {
        return "";
    }

    /**
     * @param $machineName
     * @return string
     */
    public function changeDeliveryCostStatus($machineName)
    {
        return "";
    }

}
