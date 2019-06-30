<?php

namespace App\Models\Sale;

use App\Core\Concepts\CRUDActions;
use App\Models\Delivery\Dispatch;
use App\Models\Repository\Person;
use App\Core\DataTypes\DateTime;
use App\Core\DataTypes\Money;
use App\Models\Repository\Size;

class SaleOrder extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param Dispatch
     */
//    private $dispatches;

    /**
     * @param string
     */
    private $name;

    /**
     * @param DateTime
     */
    private $create_date;

    /**
     * @param DateTime
     */
    private $last_modified_date;

    /**
     * @param Product
     */
//    private $products;

    /**
     * @param Money
     */
    private $total_price;

    /**
     * @param Person
     */
    private $owner;

    /**
     * @param OrderStatus
     */
    private $orderStatus;

    /**
     * @param Size
     */
    private $order_size;


    public function __construct()
    {
//        $this->dispatches = [];
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
     * @return Dispatch[]
     */
    public function getDispatches()
    {
//        return $this->dispatches;
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
     * @return SaleOrder
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
     * @return SaleOrder
     */
    public function setCreateDate(DateTime $create_date)
    {
        $this->create_date = $create_date;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getLastModifiedDate()
    {
        return $this->last_modified_date;
    }

    /**
     * @param DateTime $last_modified_date
     * @return SaleOrder
     */
    public function setLastModifiedDate(DateTime $last_modified_date)
    {
        $this->last_modified_date = $last_modified_date;

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
     * @return Money
     */
    public function getTotalPrice()
    {
        return $this->total_price;
    }

    /**
     * @param Money $total_price
     * @return SaleOrder
     */
    public function setTotalPrice(Money $total_price)
    {
        $this->total_price = $total_price;

        return $this;
    }

    /**
     * @return Person
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param Person $owner
     * @return SaleOrder
     */
    public function setOwner(Person $owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * @return OrderStatus
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * @param OrderStatus $orderStatus
     * @return SaleOrder
     */
    public function setOrderStatus(OrderStatus $orderStatus)
    {
        $this->orderStatus = $orderStatus;

        return $this;
    }

    public function changeOrderStatus($machineName)
    {
        return "";
    }

    /**
     * @return Size
     */
    public function getOrderSize()
    {
        return $this->order_size;
    }

    /**
     * @param Size $order_size
     */
    public function setOrderSize(Size $order_size)
    {
        $this->order_size = $order_size;
    }
}
