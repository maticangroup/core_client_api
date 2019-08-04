<?php

namespace Matican\Models\Repository;



use Matican\Core\Concepts\CRUDActions;

class SpecGroup extends CRUDActions
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
     * @param integer
     */
    private $display_order;

    /**
     * @param SpecKey
     */
    private $specKeys;

    public function __construct()
    {
        $this->specKeys = [];
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
     * @return SpecGroup
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return integer
     */
    public function getDisplayOrder()
    {
        return $this->display_order;
    }

    /**
     * @param integer $display_order
     * @return SpecGroup
     */
    public function setDisplayOrder($display_order)
    {
        $this->display_order = $display_order;

        return $this;
    }

    /**
     * @return SpecKey[]
     */
    public function getSpecKeys()
    {
        return $this->specKeys;
    }
}
