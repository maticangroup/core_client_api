<?php

namespace App\Models\Repository;


use App\Core\Concepts\CRUDActions;
use App\Core\DataTypes\MachineName;

class ItemColorStatus extends CRUDActions
{
    /**
     * @return integer
     */
    private $id;

    /**
     * @return string
     */
    private $name;

    /**
     * @return MachineName
     */
    private $machine_name;

    /**
     * @return ItemColor
     */
    private $item_colors;

    public function __construct()
    {
        $this->item_colors = [];
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
     * @return ItemColorStatus
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
     * @return ItemColorStatus
     */
    public function setMachineName(MachineName $machine_name)
    {
        $this->machine_name = $machine_name;

        return $this;
    }

    /**
     * @return ItemColor[]
     */
    public function getItemColors()
    {
        return $this->item_colors;
    }
}
