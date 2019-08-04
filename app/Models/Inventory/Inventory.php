<?php

namespace Matican\Models\Inventory;

use Matican\Core\Concepts\CRUDActions;
use Matican\Models\Repository\Location;
use Matican\Models\Repository\Person;
use Matican\Models\Repository\Telephone;
use Matican\Models\Sale\ShelveDeed;

class Inventory
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
     * @param Location
     */
    private $location;

    /**
     * @param Telephone
     */
    private $phone;

    /**
     * @param Person
     */
    private $inventory_keeper;

    /**
     * @todo Should change from Good to Product Here
     */
    /**
     * @param Good
     */
//    private $goods;

    /**
     * @param InventoryTransferDeed
     */
//    private $inventory_transfer_deed_to;

    /**
     * @param InventoryTransferDeed
     */
//    private $inventory_transfer_deed_from;

    /**
     * @param ShelveDeed
     */
//    private $shelve_deed_from;

    /**
     * @param ShelveDeed
     */
//    private $shelve_deed_to;

    public function __construct()
    {
//        $this->phone = [];
//        $this->goods = [];
//        $this->inventory_transfer_deed_to = [];
//        $this->inventory_transfer_deed_from = [];
//        $this->shelve_deed_from = [];
//        $this->shelve_deed_to = [];
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
     * @return Inventory
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation(Location $location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * @return Telephone[]
     */
    public function getPhone()
    {
//        return $this->phone;
    }

    /**
     * @return Person
     */
    public function getInventoryKeeper()
    {
        return $this->inventory_keeper;
    }

    /**
     * @param Person $inventory_keeper
     * @return Inventory
     */
    public function setInventoryKeeper(Person $inventory_keeper)
    {
        $this->inventory_keeper = $inventory_keeper;

        return $this;
    }

    /**
     * @return Good[]
     */
    public function getGoods()
    {
//        return $this->goods;
    }

    /**
     * @return InventoryTransferDeed[]
     */
    public function getInventoryTransferDeedTo()
    {
//        return $this->inventory_transfer_deed_to;
    }

    /**
     * @return InventoryTransferDeed[]
     */
    public function getInventoryTransferDeedFrom()
    {
//        return $this->inventory_transfer_deed_from;
    }

    /**
     * @return ShelveDeed[]
     */
    public function getShelveDeedFrom()
    {
//        return $this->shelve_deed_from;
    }

    /**
     * @return ShelveDeed[]
     */
    public function getShelveDeedTo()
    {
//        return $this->shelve_deed_to;
    }
}
