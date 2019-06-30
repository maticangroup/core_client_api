<?php

namespace App\Models\Sale;

use App\Core\Concepts\CRUDActions;
use App\Models\Repository\Person;
use App\Core\DataTypes\DateTime;
use App\Core\DataTypes\Text;

class PricingDeed extends CRUDActions
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
     * @param Text
     */
    private $description;

    /**
     * @param Person
     */
    private $create_user;

    /**
     * @param DateTime
     */
    private $create_date;

    /**
     * @param Person
     */
    private $confirm_user;

    /**
     * @param DateTime
     */
    private $expiry_date;

    /**
     * @param PricingDeedItem
     */
//    private $pricingDeedItems;

    /**
     * @param PricingDeedStatus
     */
    private $pricingDeedStatus;


    public function __construct()
    {
//        $this->pricingDeedItems = [];
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
     * @return PricingDeed
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Text
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param Text $description
     * @return PricingDeed
     */
    public function setDescription(Text $description)
    {
        $this->description = $description;

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
     * @return PricingDeed
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
     * @return PricingDeed
     */
    public function setCreateDate(DateTime $create_date)
    {
        $this->create_date = $create_date;

        return $this;
    }

    /**
     * @return Person
     */
    public function getConfirmUser()
    {
        return $this->confirm_user;
    }

    /**
     * @param Person $confirm_user
     * @return PricingDeed
     */
    public function setConfirmUser(Person $confirm_user)
    {
        $this->confirm_user = $confirm_user;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getExpiryDate()
    {
        return $this->expiry_date;
    }

    /**
     * @param DateTime $expiry_date
     * @return PricingDeed
     */
    public function setExpiryDate(DateTime $expiry_date)
    {
        $this->expiry_date = $expiry_date;

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
     * @return PricingDeedStatus
     */
    public function getPricingDeedStatus()
    {
        return $this->pricingDeedStatus;
    }

    /**
     * @param PricingDeedStatus $pricingDeedStatus
     * @return PricingDeed
     */
    public function setPricingDeedStatus(PricingDeedStatus $pricingDeedStatus)
    {
        $this->pricingDeedStatus = $pricingDeedStatus;

        return $this;
    }

    public function confirm($userId)
    {
        return "";
    }

    public function changePricingDeedStatus($machineName)
    {
        return "";
    }

    public function addItem()
    {
        return "";
    }

    public function removeItem()
    {
        return "";
    }
}
