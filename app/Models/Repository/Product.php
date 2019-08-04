<?php
/**
 * Created by PhpStorm.
 * User: hossein
 * Date: 30/06/19
 * Time: 09:46
 */

namespace Matican\Models\Repository;


class Product
{
    private $id;
    private $item_id;
    private $color_id;
    private $guarantee_id;
    private $supplier_id;
    private $serial;
    private $base_price;
    private $currentPrice;
    private $discountPrice;
    private $inventory_id;
    private $shelve_id;
    private $shoppingCart_id;

    /**
     * @return mixed
     */
    public function getItemId()
    {
        return $this->item_id;
    }

    /**
     * @return mixed
     */
    public function getColorId()
    {
        return $this->color_id;
    }

    /**
     * @return mixed
     */
    public function getGuaranteeId()
    {
        return $this->guarantee_id;
    }

    /**
     * @return mixed
     */
    public function getSupplierId()
    {
        return $this->supplier_id;
    }

    /**
     * @return mixed
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * @return mixed
     */
    public function getBasePrice()
    {
        return $this->basePrice;
    }

    /**
     * @return mixed
     */
    public function getCurrentPrice()
    {
        return $this->currentPrice;
    }

    /**
     * @return mixed
     */
    public function getDiscountPrice()
    {
        return $this->discountPrice;
    }

    /**
     * @return mixed
     */
    public function getInventoryId()
    {
        return $this->inventory_id;
    }

    /**
     * @return mixed
     */
    public function getShelveId()
    {
        return $this->shelve_id;
    }

    /**
     * @return mixed
     */
    public function getShoppingCartId()
    {
        return $this->shoppingCart_id;
    }

}