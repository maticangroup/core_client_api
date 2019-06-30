<?php

namespace Matican\Models\Repository;


use Matican\Core\Concepts\CRUDActions;
use Matican\Core\DataTypes\Text;

class SpecKey extends CRUDActions
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
     * @param SpecGroup
     */
    private $spec_group;

    /**
     * @param ItemCategory
     */
    private $item_categories;

    /**
     * @param boolean
     */
    private $is_special;

    /**
     * @param Text
     */
    private $default_value;

    /**
     * @param integer
     */
    private $display_order;

    /**
     * @param SpecKeyValue
     */
    private $specKeyValues;

    public function __construct()
    {
        $this->item_categories = [];
        $this->specKeyValues = [];
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
     * @return SpecKey
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return SpecGroup
     */
    public function getSpecGroup()
    {
        return $this->spec_group;
    }

    /**
     * @param SpecGroup $spec_group
     * @return SpecKey
     */
    public function setSpecGroup(SpecGroup $spec_group)
    {
        $this->spec_group = $spec_group;

        return $this;
    }

    /**
     * @return ItemCategory[]
     */
    public function getItemCategories()
    {
        return $this->item_categories;
    }

    /**
     * @return boolean
     */
    public function getIsSpecial()
    {
        return $this->is_special;
    }

    /**
     * @param boolean $is_special
     * @return SpecKey
     */
    public function setIsSpecial($is_special)
    {
        $this->is_special = $is_special;

        return $this;
    }

    /**
     * @return Text
     */
    public function getDefaultValue()
    {
        return $this->default_value;
    }

    /**
     * @param Text $default_value
     * @return SpecKey
     */
    public function setDefaultValue(Text $default_value)
    {
        $this->default_value = $default_value;

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
     * @return SpecKey
     */
    public function setDisplayOrder($display_order)
    {
        $this->display_order = $display_order;

        return $this;
    }

    /**
     * @return SpecKeyValue[]
     */
    public function getSpecKeyValues()
    {
        return $this->specKeyValues;
    }
}
