<?php

namespace Matican\Models\Repository;

use Matican\Core\Concepts\CRUDActions;
use Matican\Models\Sale\SaleOrder;


class Size extends CRUDActions
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
     * @param string
     */
    private $width;

    /**
     * @param string
     */
    private $length;

    /**
     * @param string
     */
    private $depth;

    /**
     * @param integer
     */
    private $sizeOrder;

    /**
     * @param SaleOrder
     */
//    private $saleOrders;

    /**
     * @param Item
     */
//    private $items;


    public function __construct()
    {
//        $this->saleOrders = [];
//        $this->items = [];
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
     * @return Size
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param string $width
     * @return Size
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * @return string
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param string $length
     * @return Size
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * @return string
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * @param string $depth
     * @return Size
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;

        return $this;
    }

    /**
     * @return SaleOrder[]
     */
    public function getSaleOrders()
    {
//        return $this->saleOrders;
    }

    /**
     * @return Item[]
     */
    public function getItems()
    {
//        return $this->items;
    }

    /**
     * @return integer
     */
    public function getSizeOrder()
    {
        return $this->sizeOrder;
    }

    /**
     * @param integer $sizeOrder
     */
    public function setSizeOrder($sizeOrder)
    {
        $this->sizeOrder = $sizeOrder;
    }

}
