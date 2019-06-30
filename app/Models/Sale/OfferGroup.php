<?php

namespace Matican\Models\Sale;

use Matican\Core\Concepts\CRUDActions;
use Matican\Models\Repository\Person;
use Matican\Core\DataTypes\DateTime;

class OfferGroup extends CRUDActions
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
     * @param Person
     */
    private $create_user;

    /**
     * @param DateTime
     */
    private $create_date;

    /**
     * @param OfferGroupStatus
     */
    private $offerGroupStatus;

    /**
     * @param Product
     */
//    private $products;

    public function __construct()
    {
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
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return OfferGroup
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Person
     */
    public function getCreateUser()
    {
        return $this->create_user;
    }

    /**
     * @param Person $create_user
     * @return OfferGroup
     */
    public function setCreateUser(Person $create_user)
    {
        $this->create_user = $create_user;

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
     * @return OfferGroup
     */
    public function setCreateDate(DateTime $create_date)
    {
        $this->create_date = $create_date;

        return $this;
    }

    /**
     * @return OfferGroupStatus
     */
    public function getOfferGroupStatus()
    {
        return $this->offerGroupStatus;
    }

    /**
     * @param OfferGroupStatus $offerGroupStatus
     * @return OfferGroup
     */
    public function setOfferGroupStatus(OfferGroupStatus $offerGroupStatus)
    {
        $this->offerGroupStatus = $offerGroupStatus;

        return $this;
    }

    /**
     * @return Product[]
     */
    public function getProducts()
    {
//        return $this->products;
    }

    public function changeOfferGroupStatus($machineName)
    {
        return "";
    }
}
