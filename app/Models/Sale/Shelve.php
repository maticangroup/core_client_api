<?php

namespace App\Models\Sale;

use App\Core\Concepts\CRUDActions;
use App\Models\Inventory\InventoryTransferDeed;
use App\Models\Repository\Person;

class Shelve extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param InventoryTransferDeed
     */
//    private $transfer_deed_shelve_from;

    /**
     * @param InventoryTransferDeed
     */
//    private $transfer_deed_shelve_to;

    /**
     * @param string
     */
    private $name;

    /**
     * @param Product
     */
//    private $products;

    /**
     * @param Person
     */
    private $shelve_keeper;

    /**
     * @param ShelveDeed
     */
//    private $deed_from;

    /**
     * @param ShelveDeed
     */
//    private $deed_to;

    /**
     * @param ShelveStatus
     */
    private $shelveStatus;

    public function __construct()
    {
//        $this->transfer_deed_shelve_from = [];
//        $this->transfer_deed_shelve_to = [];
//        $this->products = [];
//        $this->deed_from = [];
//        $this->deed_to = [];
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return InventoryTransferDeed[]
     */
    public function getTransferDeedShelveFrom()
    {
//        return $this->transfer_deed_shelve_from;
    }

    /**
     * @return InventoryTransferDeed[]
     */
    public function getTransferDeedShelveTo()
    {
//        return $this->transfer_deed_shelve_to;
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
     * @return Shelve
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Product[]
     */
    public function getProducts()
    {
//        return $this->products;
    }

    /**
     * @return Person
     */
    public function getShelveKeeper()
    {
        return $this->shelve_keeper;
    }

    /**
     * @param Person $shelve_keeper
     * @return Shelve
     */
    public function setShelveKeeper(Person $shelve_keeper)
    {
        $this->shelve_keeper = $shelve_keeper;

        return $this;
    }

    /**
     * @return ShelveDeed[]
     */
    public function getDeedFrom()
    {
//        return $this->deed_from;
    }

    /**
     * @return ShelveDeed[]
     */
    public function getDeedTo()
    {
//        return $this->deed_to;
    }

    /**
     * @return ShelveStatus
     */
    public function getShelveStatus()
    {
        return $this->shelveStatus;
    }

    /**
     * @param ShelveStatus $shelveStatus
     * @return Shelve
     */
    public function setShelveStatus(ShelveStatus $shelveStatus)
    {
        $this->shelveStatus = $shelveStatus;

        return $this;
    }

    public function changeShelveStatus($machineName)
    {
        return "";
    }
}
