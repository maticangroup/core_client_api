<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/9/2019
 * Time: 12:20 PM
 */

namespace Matican\FormModels\Inventory;


class InventoryProductsModel
{
    private $inventoryId;
    private $products;

    /**
     * @return mixed
     */
    public function getInventoryId()
    {
        return $this->inventoryId;
    }

    /**
     * @param mixed $inventoryId
     */
    public function setInventoryId($inventoryId): void
    {
        $this->inventoryId = $inventoryId;
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