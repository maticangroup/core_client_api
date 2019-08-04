<?php

namespace Matican\Models\Sale;

use Matican\Core\Concepts\CRUDActions;
use Matican\Core\DataTypes\Color;
use Matican\Models\Repository\Company;
use Matican\Models\Repository\Guarantee;
use Matican\Models\Repository\Item;
use Matican\Models\Repository\ItemColor;
use Matican\Core\DataTypes\DateTime;
use Matican\Core\DataTypes\Money;
use Matican\Core\DataTypes\Serial;

class Product extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param OfferGroup
     */
//    private $offerGroups;

    /**
     * @param SaleOrder
     */
    private $sale_order;

    /**
     * @param PricingDeedItem
     */
//    private $pricingDeedItems;

    /**
     * @param Serial
     */
    private $serial;

    /**
     * @param Money
     */
    private $base_price;

    /**
     * @param Money
     */
    private $current_price;

    /**
     * @param Money
     */
    private $discount_price;

    /**
     * @param PricingDeed
     */
    private $last_applied_pricing_deed;

    /**
     * @param DateTime
     */
    private $last_applied_pricing_deed_expiry_date;

    /**
     * @param ProductStatus
     */
    private $productStatus;

    /**
     * @param Shelve
     */
    private $shelve;

    /**
     * @param ShelveDeed
     */
//    private $shelveDeeds;

    /**
     * @param Item
     */
    private $item;

    /**
     * @param Color
     */
    private $color;

    /**
     * @param Guarantee
     */
    private $guarantee;

    /**
     * @param Company
     */
    private $supplier;

    /**
     * @param ShoppingCart
     */
    private $shoppingCart;



    public function __construct()
    {
//        $this->offerGroups = [];
//        $this->pricingDeedItems = [];
//        $this->shelveDeeds = [];
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return OfferGroup[]
     */
    public function getOfferGroups()
    {
//        return $this->offerGroups;
    }

    /**
     * @return SaleOrder
     */
    public function getSaleOrder()
    {
        return $this->sale_order;
    }

    /**
     * @param SaleOrder $sale_order
     * @return Product
     */
    public function setSaleOrder(SaleOrder $sale_order)
    {
        $this->sale_order = $sale_order;

        return $this;
    }

    /**
     * @return PricingDeedItem[]
     */
    public function getPricingDeedItems()
    {
//        return $this->pricingDeedItems;
    }

    /**
     * @param Item $item
     */
    public function setItem(Item $item)
    {
        $this->item = $item;
    }

    /**
     * @return Item
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param Company $supplier
     */
    public function setSupplier(Company $supplier)
    {
        $this->supplier = $supplier;
    }

    /**
     * @return Company
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * @param Color $color
     */
    public function setColor(Color $color)
    {
        $this->color = $color;
    }

    /**
     * @return ItemColor
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return Serial
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * @param Serial $serial
     * @return Product
     */
    public function setSerial(Serial $serial)
    {
        $this->serial = $serial;

        return $this;
    }

    /**
     * @return Money
     */
    public function getBasePrice()
    {
        return $this->base_price;
    }

    public function setBasePrice(Money $base_price)
    {
        $this->base_price = $base_price;

        return $this;
    }

    /**
     * @return Money
     */
    public function getCurrentPrice()
    {
        return $this->current_price;
    }

    /**
     * @param Money $current_price
     * @return Product
     */
    public function setCurrentPrice(Money $current_price)
    {
        $this->current_price = $current_price;

        return $this;
    }

    /**
     * @return Money
     */
    public function getDiscountPrice()
    {
        return $this->discount_price;
    }

    /**
     * @param Money $discount_price
     * @return Product
     */
    public function setDiscountPrice(Money $discount_price)
    {
        $this->discount_price = $discount_price;

        return $this;
    }


    /**
     * @param Guarantee $guarantee
     */
    public function setGuarantee(Guarantee $guarantee)
    {
        $this->guarantee = $guarantee;
    }

    /**
     * @return Guarantee
     */
    public function getGuarantee()
    {
        return $this->guarantee;
    }

    /**
     * @return PricingDeed
     */
    public function getLastAppliedPricingDeed()
    {
        return $this->last_applied_pricing_deed;
    }

    /**
     * @param PricingDeed $last_applied_pricing_deed
     * @return Product
     */
    public function setLastAppliedPricingDeed(PricingDeed $last_applied_pricing_deed)
    {
        $this->last_applied_pricing_deed = $last_applied_pricing_deed;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getLastAppliedPricingDeedExpiryDate()
    {
        return $this->last_applied_pricing_deed_expiry_date;
    }

    /**
     * @param DateTime $last_applied_pricing_deed_expiry_date
     * @return Product
     */
    public function setLastAppliedPricingDeedExpiryDate(DateTime $last_applied_pricing_deed_expiry_date)
    {
        $this->last_applied_pricing_deed_expiry_date = $last_applied_pricing_deed_expiry_date;

        return $this;
    }

    /**
     * @return ProductStatus
     */
    public function getProductStatus()
    {
        return $this->productStatus;
    }

    /**
     * @param ProductStatus $productStatus
     * @return Product
     */
    public function setProductStatus(ProductStatus $productStatus)
    {
        $this->productStatus = $productStatus;

        return $this;
    }

    /**
     * @return Shelve
     */
    public function getShelve()
    {
        return $this->shelve;
    }

    /**
     * @param Shelve $shelve
     * @return Product
     */
    public function setShelve(Shelve $shelve)
    {
        $this->shelve = $shelve;

        return $this;
    }

    /**
     * @return ShelveDeed[]
     */
    public function getShelveDeeds()
    {
//        return $this->shelveDeeds;
    }

    /**
     * @return ShoppingCart
     */
    public function getShoppingCart()
    {
        return $this->shoppingCart;
    }

    /**
     * @param ShoppingCart $shoppingCart
     */
    public function setShoppingCart(ShoppingCart $shoppingCart)
    {
        $this->shoppingCart = $shoppingCart;
    }

    public function changeProductStatus($machineName)
    {
        return "";
    }
}
