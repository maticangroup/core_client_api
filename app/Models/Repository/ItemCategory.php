<?php

namespace Matican\Models\Repository;



use Matican\Core\Concepts\CRUDActions;
use Matican\Core\DataTypes\Text;

class ItemCategory extends CRUDActions
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
     * @param Item
     */
//    private $items;

    /**
     * @param Text
     */
    private $description;

    /**
     * @param SpecKey
     */
//    private $specKeys;

    /**
     * @param Size
     */
    private $size;

    /**
     * @param ItemCategory
     */
    private $parent;

    /**
     * @todo Thumbnail should be added when media is created
     */

    public function __construct()
    {
//        $this->items = [];
//        $this->specKeys = [];
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
     * @return ItemCategory
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Item[]
     */
    public function getItems()
    {
//        return $this->items;
    }

    /**
     * @return Text
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param Text $description
     * @return ItemCategory
     */
    public function setDescription(Text $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return SpecKey[]
     */
    public function getSpecKeys()
    {
//        return $this->specKeys;
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
     * @return ItemCategory
     */
    public function setSize(Size $size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * @return ItemCategory
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param ItemCategory $parent
     */
    public function setParent(ItemCategory $parent)
    {
        $this->parent = $parent;
    }
}
