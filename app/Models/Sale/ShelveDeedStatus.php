<?php

namespace App\Models\Sale;


use App\Core\Concepts\CRUDActions;
use App\Core\DataTypes\MachineName;

class ShelveDeedStatus extends CRUDActions
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
     * @param ShelveDeed
     */
    private $deeds;

    public function __construct()
    {
        $this->deeds = [];
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
     * @return ShelveDeedStatus
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
     * @return ShelveDeedStatus
     */
    public function setMachineName(MachineName $machine_name)
    {
        $this->machine_name = $machine_name;

        return $this;
    }

    /**
     * @return ShelveDeed[]
     */
    public function getDeeds()
    {
        return $this->deeds;
    }
}
