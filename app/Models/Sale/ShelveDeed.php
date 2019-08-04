<?php

namespace Matican\Models\Sale;

use Matican\Core\Concepts\CRUDActions;
use Matican\Models\Delivery\Queue;
use Matican\Models\Inventory\Inventory;
use Matican\Models\Repository\Person;
use Matican\Core\DataTypes\DateTime;
use Matican\Core\DataTypes\Text;

class ShelveDeed extends CRUDActions
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
    private $from_inventory;

    /**
     * @param Inventory
     */
    private $to_inventory;

    /**
     * @param Queue
     */
    private $to_delivery_queue;

    /**
     * @param Product
     */
//    private $products;

    /**
     * @param DateTime
     */
    private $create_date;

    /**
     * @param Person
     */
    private $create_user;

    /**
     * @param DateTime
     */
    private $confirm_date;

    /**
     * @param Person
     */
    private $confirm_user;

    /**
     * @param ShelveDeedStatus
     */
    private $shelveDeedStatus;

    /**
     * @param ShelveDeedType
     */
    private $shelveDeedType;

    public function __construct()
    {
//        $this->products = [];
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
     * @return ShelveDeed
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
     * @return ShelveDeed
     */
    public function setDescription(Text $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Shelve
     */
    public function getFromShelve()
    {
        return $this->from_shelve;
    }

    /**
     * @param Shelve $from_shelve
     * @return ShelveDeed
     */
    public function setFromShelve(Shelve $from_shelve)
    {
        $this->from_shelve = $from_shelve;

        return $this;
    }

    /**
     * @return Shelve
     */
    public function getToShelve()
    {
        return $this->to_shelve;
    }

    /**
     * @param Shelve $to_shelve
     * @return ShelveDeed
     */
    public function setToShelve(Shelve $to_shelve)
    {
        $this->to_shelve = $to_shelve;

        return $this;
    }

    /**
     * @return Inventory
     */
    public function getFromInventory()
    {
        return $this->from_inventory;
    }

    /**
     * @param Inventory $from_inventory
     * @return ShelveDeed
     */
    public function setFromInventory(Inventory $from_inventory)
    {
        $this->from_inventory = $from_inventory;

        return $this;
    }

    /**
     * @return Inventory
     */
    public function getToInventory()
    {
        return $this->to_inventory;
    }

    /**
     * @param Inventory $to_inventory
     * @return ShelveDeed
     */
    public function setToInventory(Inventory $to_inventory)
    {
        $this->to_inventory = $to_inventory;

        return $this;
    }

    /**
     * @return Queue
     */
    public function getToDeliveryQueue()
    {
        return $this->to_delivery_queue;
    }

    /**
     * @param Queue $to_delivery_queue
     * @return ShelveDeed
     */
    public function setToDeliveryQueue(Queue $to_delivery_queue)
    {
        $this->to_delivery_queue = $to_delivery_queue;

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
     * @return DateTime
     */
    public function getCreateDate()
    {
        return $this->create_date;
    }

    /**
     * @param DateTime $create_date
     * @return ShelveDeed
     */
    public function setCreateDate(DateTime $create_date)
    {
        $this->create_date = $create_date;

        return $this;
    }

    /**
     * @return Person
     */
    public function getCreateUser()
    {
        return $this->create_user;
    }

    /**
     * @param Person $create_user
     * @return ShelveDeed
     */
    public function setCreateUser(Person $create_user)
    {
        $this->create_user = $create_user;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getConfirmDate()
    {
        return $this->confirm_date;
    }

    /**
     * @param DateTime $confirm_date
     * @return ShelveDeed
     */
    public function setConfirmDate(DateTime $confirm_date)
    {
        $this->confirm_date = $confirm_date;

        return $this;
    }

    /**
     * @return Person
     */
    public function getConfirmUser()
    {
        return $this->confirm_user;
    }

    /**
     * @param Person $confirm_user
     * @return ShelveDeed
     */
    public function setConfirmUser(Person $confirm_user)
    {
        $this->confirm_user = $confirm_user;

        return $this;
    }

    /**
     * @return ShelveDeedStatus
     */
    public function getShelveDeedStatus()
    {
        return $this->shelveDeedStatus;
    }

    /**
     * @param ShelveDeedStatus $shelveDeedStatus
     * @return ShelveDeed
     */
    public function setShelveDeedStatus(ShelveDeedStatus $shelveDeedStatus)
    {
        $this->shelveDeedStatus = $shelveDeedStatus;

        return $this;
    }

    /**
     * @return ShelveDeedType
     */
    public function getShelveDeedType()
    {
        return $this->shelveDeedType;
    }

    /**
     * @param ShelveDeedType $shelveDeedType
     * @return ShelveDeed
     */
    public function setShelveDeedType(ShelveDeedType $shelveDeedType)
    {
        $this->shelveDeedType = $shelveDeedType;

        return $this;
    }

    public function confirm($userId)
    {
        return "";
    }

    public function changeShelveDeedStatus($machineName)
    {
        return "";
    }

    public function changeShelveDeedType($machineName)
    {
        return "";
    }

    public function addProduct()
    {
        return "";
    }

    public function removeProduct()
    {
        return "";
    }
}
