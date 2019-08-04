<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/9/2019
 * Time: 4:01 PM
 */

namespace Matican\FormModels\Inventory;


class ShelveProductsModel
{
    private $shelveId;
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