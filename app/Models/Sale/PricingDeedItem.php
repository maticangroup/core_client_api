<?php

namespace App\Models\Sale;


use App\Core\Concepts\CRUDActions;
use App\Core\DataTypes\Money;

class PricingDeedItem extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param Product
     */
    private $product;

    /**
     * @param Money
     */
    private $newBasePrice;

    /**
     * @param Money
     */
    private $newPrice;

    /**
     * @param Money
     */
    private $newDiscountPrice;

    /**
     * @param PricingDeed
     */
    private $pricing_deed;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param Product $product
     * @return PricingDeedItem
     */
    public function setProduct(Product $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @return Money
     */
    public function getNewBasePrice()
    {
        return $this->newBasePrice;
    }

    /**
     * @param Money $newBasePrice
     * @return PricingDeedItem
     */
    public function setNewBasePrice(Money $newBasePrice)
    {
        $this->newBasePrice = $newBasePrice;

        return $this;
    }

    /**
     * @return Money
     */
    public function getNewPrice()
    {
        return $this->newPrice;
    }

    /**
     * @param Money $newPrice
     * @return PricingDeedItem
     */
    public function setNewPrice(Money $newPrice)
    {
        $this->newPrice = $newPrice;

        return $this;
    }

    /**
     * @return Money
     */
    public function getNewDiscountPrice()
    {
        return $this->newDiscountPrice;
    }

    /**
     * @param Money $newDiscountPrice
     * @return PricingDeedItem
     */
    public function setNewDiscountPrice(Money $newDiscountPrice)
    {
        $this->newDiscountPrice = $newDiscountPrice;

        return $this;
    }

    /**
     * @return PricingDeed
     */
    public function getPricingDeed()
    {
        return $this->pricing_deed;
    }

    /**
     * @param PricingDeed $pricing_deed
     * @return PricingDeedItem
     */
    public function setPricingDeed(PricingDeed $pricing_deed)
    {
        $this->pricing_deed = $pricing_deed;

        return $this;
    }
}
