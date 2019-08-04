<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/9/2019
 * Time: 3:59 PM
 */

namespace App\FormModels\Inventory;


class ShelveItemProductsModel
{
    private $shelveId;
    private $itemId;
    private $products;

    /**
     * @return mixed
     */
    public function getShelveId()
    {
        return $this->shelveId;
    }

    /**
     * @param mixed $shelveId
     */
    public function setShelveId($shelveId): void
    {
        $this->shelveId = $shelveId;
    }

    /**
     * @return mixed
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param mixed $itemId
     */
    public function setItemId($itemId): void
    {
        $this->itemId = $itemId;
    }

    /**
     * @return mixed
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param mixed $products
     */
    public function setProducts($products): void
    {
        $this->products = $products;
    }
}