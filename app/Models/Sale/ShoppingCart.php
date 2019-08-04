<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 5/30/2019
 * Time: 7:02 PM
 */

namespace Matican\Models\Sale;


use Matican\Core\Concepts\CRUDActions;
use Matican\Models\Repository\Person;

class ShoppingCart extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param Person
     */
    private $owner;

    /**
     * @param Product
     */
    private $products;

    public function __construct()
    {
        $this->products = [];
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
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
     * @return ShoppingCart
     */
    public function setOwner(Person $owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * @return Product[]
     */
    public function getProducts()
    {
        return $this->products;
    }
}