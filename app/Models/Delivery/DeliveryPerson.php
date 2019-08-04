<?php

namespace Matican\Models\Delivery;

use Matican\Core\Concepts\CRUDActions;
use Matican\Models\Repository\District;
use Matican\Models\Repository\Person;

class DeliveryPerson extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param Person
     */
    private $person;

    /**
     * @param District
     */
//    private $allowed_districts;

    /**
     * @param DeliveryMethod
     */
//    private $delivery_methods;

    /**
     * @param DeliveryPersonStatus
     */
    private $deliveryPersonStatus;

    /**
     * @param Dispatch
     */
//    private $dispatches;

    /**
     * @param Queue
     */
//    private $queues;

    public function __construct()
    {
//        $this->allowed_districts = [];
//        $this->delivery_methods = [];
//        $this->dispatches = [];
//        $this->queues = [];
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Person
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * @param Person $person
     * @return $this
     */
    public function setPerson(Person $person)
    {
        $this->person = $person;

        return $this;
    }

    /**
     * @return District[]
     */
    public function getAllowedDistricts()
    {
//        return $this->allowed_districts;
    }

    /**
     * @return DeliveryMethod[]
     */
    public function getDeliveryMethods()
    {
//        return $this->delivery_methods;
    }

    /**
     * @return DeliveryPersonStatus
     */
    public function getDeliveryPersonStatus()
    {
        return $this->deliveryPersonStatus;
    }

    /**
     * @param DeliveryPersonStatus $deliveryPersonStatus
     * @return $this
     */
    public function setDeliveryPersonStatus(DeliveryPersonStatus $deliveryPersonStatus)
    {
        $this->deliveryPersonStatus = $deliveryPersonStatus;

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
     * @return Queue[]
     */
    public function getQueues()
    {
//        return $this->queues;
    }

    /**
     * @param $machineName
     * @return string
     */
    public function changeDeliveryPersonStatus($machineName)
    {
        return "";
    }
}
