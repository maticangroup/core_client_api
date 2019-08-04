<?php

namespace Matican\Models\Delivery;


use Matican\Core\Concepts\CRUDActions;
use Matican\Core\DataTypes\MachineName;

class DeliveryPersonStatus extends CRUDActions
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
     * @param DeliveryPerson
     */
    private $delivery_people;

    public function __construct()
    {
        $this->delivery_people = [];
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
     * @return DeliveryPersonStatus
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
     * @return DeliveryPersonStatus
     */
    public function setMachineName(MachineName $machine_name)
    {
        $this->machine_name = $machine_name;

        return $this;
    }

    /**
     * @return DeliveryPerson[]
     */
    public function getDeliveryPeople()
    {
        return $this->delivery_people;
    }
}
