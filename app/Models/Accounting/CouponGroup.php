<?php

namespace App\Models\Accounting;

use App\Core\Concepts\CRUDActions;
use App\Core\DataTypes\Money;
use App\Core\DataTypes\Percentage;
use App\Models\Repository\Person;
use App\Core\DataTypes\CouponPrefix;
use App\Core\DataTypes\DateTime;
use App\Core\DataTypes\Text;


class CouponGroup extends CRUDActions
{
    /**
     * @todo coupon count and coupon effect type should be considered too
     */
    /**
     * @todo for all statuses and types of the system
     *        it should be possible to define one type or status as the default to be used when
     *          a new instance is created.
     */
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
     * @param DateTime
     */
    private $create_date;

    /**
     * @param Person
     */
    private $creator;

    /**
     * @param Person
     */
    private $confirmed_by;

    /**
     * @param CouponPrefix
     */
    private $prefix;

    /**
     * @param boolean
     */
    private $is_public;

    /**
     * @param CouponGroupStatus
     */
    private $couponGroupStatus;

    /**
     * @param Person
     */
//    private $allowed_customers;

    /**
     * @param integer
     */
    private $allowed_usage_count;

    /**
     * @param integer
     */
    private $left_coupons;

    /**
     * @param CouponUsage
     */
//    private $couponUsages;

    /**
     * @param Money
     */
    private $minimum_invoice_price;

    /**
     * @param Percentage
     */
    private $discount_percentage;

    /**
     * CouponGroup constructor.
     */
    public function __construct()
    {
//        $this->allowed_customers = [];
//        $this->couponUsages = [];
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
     * @return $this
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
     * @return $this
     */
    public function setDescription(Text $description)
    {
        $this->description = $description;

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
     * @return $this
     */
    public function setCreateDate(DateTime $create_date)
    {
        $this->create_date = $create_date;

        return $this;
    }

    /**
     * @return Person
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * @param Person $creator
     * @return $this
     */
    public function setCreator(Person $creator)
    {
        $this->creator = $creator;

        return $this;
    }


    /**
     * @return Person
     */
    public function getConfirmedby()
    {
        return $this->confirmed_by;
    }

    /**
     * @param Person $confirmed_by
     * @return $this
     */
    public function setConfirmedby(Person $confirmed_by)
    {
        $this->confirmed_by = $confirmed_by;

        return $this;
    }

    /**
     * @return CouponPrefix
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * @param CouponPrefix $prefix
     * @return $this
     */
    public function setPrefix(CouponPrefix $prefix)
    {
        $this->prefix = $prefix;

        return $this;
    }

    /**
     * @return CouponGroupStatus
     */
    public function getCouponGroupStatus()
    {
        return $this->couponGroupStatus;
    }

    /**
     * @param CouponGroupStatus $couponGroupStatus
     * @return $this
     */
    public function setCouponGroupStatus(CouponGroupStatus $couponGroupStatus)
    {
        $this->couponGroupStatus = $couponGroupStatus;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getisPublic()
    {
        return $this->is_public;
    }

    /**
     * @param boolean $is_public
     */
    public function setIsPublic($is_public)
    {
        $this->is_public = $is_public;
    }

    /**
     * @return integer
     */
    public function getAllowedUsageCount()
    {
        return $this->allowed_usage_count;
    }

    /**
     * @param integer $allowed_usage_count
     */
    public function setAllowedUsageCount($allowed_usage_count)
    {
        $this->allowed_usage_count = $allowed_usage_count;
    }

    /**
     * @return integer
     */
    public function getLeftCoupons()
    {
        return $this->left_coupons;
    }

    /**
     * @param integer $left_coupons
     */
    public function setLeftCoupons($left_coupons)
    {
        $this->left_coupons = $left_coupons;
    }


    public function getAllowedCustomers()
    {
//        return $this->allowed_customers;
    }


    public function getCouponUsages()
    {
//        return $this->couponUsages;
    }

    /**
     * @return Money
     */
    public function getMinimumInvoicePrice()
    {
        return $this->minimum_invoice_price;
    }

    /**
     * @param Money $minimum_invoice_price
     */
    public function setMinimumInvoicePrice(Money $minimum_invoice_price)
    {
        $this->minimum_invoice_price = $minimum_invoice_price;
    }

    /**
     * @return Percentage
     */
    public function getDiscountPercentage()
    {
        return $this->discount_percentage;
    }

    /**
     * @param Percentage $discount_percentage
     */
    public function setDiscountPercentage(Percentage $discount_percentage)
    {
        $this->discount_percentage = $discount_percentage;
    }

    /**
     * @param $machineName
     * @return string
     */
    public function changeCouponGroupStatus($machineName)
    {
        return "";
    }

    /**
     * @param $userId
     * @return string
     */
    public function confirm($userId)
    {
        return "";
    }
}
