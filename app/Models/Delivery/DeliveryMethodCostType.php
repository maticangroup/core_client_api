<?php

namespace Matican\Models\Delivery;


use Matican\Core\Concepts\CRUDActions;
use Matican\Core\DataTypes\MachineName;

class DeliveryMethodCostType extends CRUDActions
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
    private $delivery_method;

    public function __construct()
    {
        $this->delivery_method = [];
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
     * @return DeliveryMethodCostType
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
     * @return DeliveryMethodCostType
     */
    public function setMachineName(MachineName $machine_name)
    {
        $this->machine_name = $machine_name;

        return $this;
    }

    /**
     * @return DeliveryMethod[]
     */
    public function getDeliveryMethod()
    {
        return $this->delivery_method;
    }
}
