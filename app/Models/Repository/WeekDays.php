<?php

namespace App\Models\Repository;

use App\Core\Concepts\CRUDActions;
use App\Core\DataTypes\MachineName;
use App\Models\Delivery\DeliveryMethod;
use App\Models\Delivery\Queue;

class WeekDays extends CRUDActions
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
     * @param MachineName
     */
    private $machine_name;

    /**
     * @param DeliveryMethod
     */
//    private $deliveryMethods;

    /**
     * @param Queue
     */
//    private $queues;


    public function __construct()
    {
        $this->deliveryMethods = [];
        $this->queues = [];
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
     * @return WeekDays
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return MachineName
     */
    public function getMachineName()
    {
        return $this->machine_name;
    }

    /**
     * @param MachineName $machine_name
     * @return WeekDays
     */
    public function setMachineName(MachineName $machine_name)
    {
        $this->machine_name = $machine_name;

        return $this;
    }

    /**
     * @return DeliveryMethod[]
     */
    public function getDeliveryMethods()
    {
//        return $this->deliveryMethods;
    }

    /**
     * @return Queue[]
     */
    public function getQueues()
    {
//        return $this->queues;
    }
}
