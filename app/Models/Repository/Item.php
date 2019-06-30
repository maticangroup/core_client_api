<?php

namespace App\Models\Repository;

use App\Core\Concepts\CRUDActions;
use App\Core\DataTypes\DateTime;

class Item extends CRUDActions
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
     * @param Brand
     */
    private $brand;

    /**
     * @param Barcode
     */
//    private $barcodes;
    /**

     *
     * @todo Images should be added when Media is created
     */

    /**
     * @param DateTime
     */
    private $create_date;

    /**
     * @param DateTime
     */
    private $last_modified;

    /**
     * @param ItemCategory
     */
//    private $itemCategories;

    /**
     * @param SpecKeyValue
     */
//    private $specKeyValues;


    /**
     * @param Guarantee
     */
//    private $availableGuarantees;

    /**
     * @param ItemColor
     */
//    private $availableColors;

    /**
     * @param Company
     */
//    private $availableSuppliers;

    /**
     * @param Person
     */
//    private $favorites_of;

    /**
     * @param Size
     */
    private $item_size;



    public function __construct()
    {
//        $this->barcodes = [];
//        $this->itemCategories = [];
//        $this->specKeyValues = [];
//        $this->availableGuarantees = [];
//        $this->availableColors = [];
//        $this->availableSuppliers = [];
//        $this->favorites_of = [];
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
     * @return Item
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param Brand $brand
     * @return Item
     */
    public function setBrand(Brand $brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * @return Barcode[]
     */
    public function getBarcodes()
    {
//        return $this->barcodes;
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
     * @return Item
     */
    public function setCreateDate(DateTime $create_date)
    {
        $this->create_date = $create_date;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getLastModified()
    {
        return $this->last_modified;
    }

    /**
     * @param DateTime $last_modified
     * @return Item
     */
    public function setLastModified(DateTime $last_modified)
    {
        $this->last_modified = $last_modified;

        return $this;
    }

    /**
     * @return ItemCategory[]
     */
    public function getItemCategories()
    {
//        return $this->itemCategories;
    }

    /**
     * @return SpecKeyValue[]
     */
    public function getSpecKeyValues()
    {
//        return $this->specKeyValues;
    }

    /**
     * @return Guarantee[]
     */
    public function getAvailableGuarantees()
    {
//        return $this->availableGuarantees;
    }

    /**
     * @return ItemColor[]
     */
    public function getAvailableColors()
    {
//        return $this->availableColors;
    }

    /**
     * @return Company[]
     */
    public function getAvailableSuppliers()
    {
//        return $this->availableSuppliers;
    }

    /**
     * @return Person[]
     */
    public function getFavoritesOf()
    {
//        return $this->favorites_of;
    }

    /**
     * @return Size
     */
    public function getItemSize()
    {
        return $this->item_size;
    }

    /**
     * @param Size $item_size
     */
    public function setItemSize(Size $item_size)
    {
        $this->item_size = $item_size;
    }
}
