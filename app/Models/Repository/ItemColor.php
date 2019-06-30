<?php

namespace App\Models\Repository;

use App\Core\Concepts\CRUDActions;


class ItemColor extends CRUDActions
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
     * @param ItemColorStatus
     */
    private $itemColorStatus;

    /**
     * @param Item
     */
//    private $items;

    public function __construct()
    {
//        $this->items = [];
    }

    /**
     * @todo Color image should be added later when media is created
     */

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
     * @return ItemColor
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return ItemColorStatus
     */
    public function getItemColorStatus()
    {
        return $this->itemColorStatus;
    }

    /**
     * @param ItemColorStatus $itemColorStatus
     * @return ItemColor
     */
    public function setItemColorStatus(ItemColorStatus $itemColorStatus)
    {
        $this->itemColorStatus = $itemColorStatus;

        return $this;
    }

    /**
     * @return Item[]
     */
    public function getItems()
    {
//        return $this->items;
    }

    public function changeItemColorStatus($machineName)
    {
        return "";
    }
}
