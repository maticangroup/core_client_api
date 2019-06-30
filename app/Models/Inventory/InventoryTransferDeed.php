<?php

namespace Matican\Models\Inventory;

use Matican\Core\Concepts\CRUDActions;
use Matican\Models\Repository\Person;
use Matican\Models\Sale\Shelve;
use Matican\Core\DataTypes\DateTime;
use Matican\Core\DataTypes\Text;

class InventoryTransferDeed extends CRUDActions
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
     * @param Text
     */
    private $description;

    /**
     * @param DateTime
     */
    private $create_date;

    /**
     * @param Good
     */
    private $goods;

    /**
     * @param Shelve
     */
    private $from_shelve;

    /**
     * @param Shelve
     */
    private $to_shelve;

    /**
     * @param Inventory
     */
    private $to_inventory;

    /**
     * @param Inventory
     */
    private $from_inventory;

    /**
     * @param Person
     */
    private $creator;

    /**
     * @param Person
     */
    private $confirmed_by;

    /**
     * @param InventoryDeedStatus
     */
    private $deed_status;


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getCreateDate()
    {
        return $this->create_date;
    }

    /**
     * @param mixed $create_date
     */
    public function setCreateDate($create_date): void
    {
        $this->create_date = $create_date;
    }

    /**
     * @return mixed
     */
    public function getGoods()
    {
        return $this->goods;
    }

    /**
     * @param mixed $goods
     */
    public function setGoods($goods): void
    {
        $this->goods = $goods;
    }

    /**
     * @return mixed
     */
    public function getFromShelve()
    {
        return $this->from_shelve;
    }

    /**
     * @param mixed $from_shelve
     */
    public function setFromShelve($from_shelve): void
    {
        $this->from_shelve = $from_shelve;
    }

    /**
     * @return mixed
     */
    public function getToShelve()
    {
        return $this->to_shelve;
    }

    /**
     * @param mixed $to_shelve
     */
    public function setToShelve($to_shelve): void
    {
        $this->to_shelve = $to_shelve;
    }

    /**
     * @return mixed
     */
    public function getToInventory()
    {
        return $this->to_inventory;
    }

    /**
     * @param mixed $to_inventory
     */
    public function setToInventory($to_inventory): void
    {
        $this->to_inventory = $to_inventory;
    }

    /**
     * @return mixed
     */
    public function getFromInventory()
    {
        return $this->from_inventory;
    }

    /**
     * @param mixed $from_inventory
     */
    public function setFromInventory($from_inventory): void
    {
        $this->from_inventory = $from_inventory;
    }

    /**
     * @return mixed
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * @param mixed $creator
     */
    public function setCreator($creator): void
    {
        $this->creator = $creator;
    }

    /**
     * @return mixed
     */
    public function getConfirmedBy()
    {
        return $this->confirmed_by;
    }

    /**
     * @param mixed $confirmed_by
     */
    public function setConfirmedBy($confirmed_by): void
    {
        $this->confirmed_by = $confirmed_by;
    }

    /**
     * @return mixed
     */
    public function getDeedStatus()
    {
        return $this->deed_status;
    }

    /**
     * @param mixed $deed_status
     */
    public function setDeedStatus($deed_status): void
    {
        $this->deed_status = $deed_status;
    }

    public function addGood()
    {
        return "";
    }

    public function removeGood()
    {
        return "";
    }

}
