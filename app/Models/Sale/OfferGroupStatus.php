<?php

namespace App\Models\Sale;


use App\Core\Concepts\CRUDActions;
use App\Core\DataTypes\MachineName;

class OfferGroupStatus extends CRUDActions
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
     * @param OfferGroup
     */
    private $offer_groups;

    public function __construct()
    {
        $this->offer_groups = [];
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
     * @return OfferGroupStatus
     */
    public function setName($name): self
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
     * @return OfferGroupStatus
     */
    public function setMachineName(MachineName $machine_name)
    {
        $this->machine_name = $machine_name;

        return $this;
    }

    /**
     * @return OfferGroup[]
     */
    public function getOfferGroups()
    {
        return $this->offer_groups;
    }
}
