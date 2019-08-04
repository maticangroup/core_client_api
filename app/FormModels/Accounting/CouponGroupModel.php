<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/15/2019
 * Time: 6:16 PM
 */

namespace Matican\FormModels\Accounting;


class CouponGroupModel
{
    private $couponGroupId;
    private $couponGroupName;
    private $couponGroupPrefix;
    private $couponGroupSerial;
    private $couponGroupExpiryDate;
    private $couponGroupDiscountType;
    private $couponGroupDiscountEffect;
    private $couponGroupMinimumInvoicePrice;
    private $couponGroupIsPrivate;
    private $couponGroupUsageTimes;
    private $couponGroupLeftUsageTimes;
    private $couponGroupUsageDescription;
    private $couponGroupCreatePerson;
    private $couponGroupCreateDate;
    private $couponGroupConfirmPerson;
    private $couponGroupConfirmDate;
    private $orderId;
    private $couponGroupAllowedPeople;
    private $couponGroupStatus;
    private $couponGroupConfirmStatus;
    private $couponGroupUsedPeople;

    /**
     * @return mixed
     */
    public function getCouponGroupId()
    {
        return $this->couponGroupId;
    }

    /**
     * @param mixed $couponGroupId
     */
    public function setCouponGroupId($couponGroupId): void
    {
        $this->couponGroupId = $couponGroupId;
    }

    /**
     * @return mixed
     */
    public function getCouponGroupName()
    {
        return $this->couponGroupName;
    }

    /**
     * @param mixed $couponGroupName
     */
    public function setCouponGroupName($couponGroupName): void
    {
        $this->couponGroupName = $couponGroupName;
    }

    /**
     * @return mixed
     */
    public function getCouponGroupPrefix()
    {
        return $this->couponGroupPrefix;
    }

    /**
     * @param mixed $couponGroupPrefix
     */
    public function setCouponGroupPrefix($couponGroupPrefix): void
    {
        $this->couponGroupPrefix = $couponGroupPrefix;
    }

    /**
     * @return mixed
     */
    public function getCouponGroupExpiryDate()
    {
        return $this->couponGroupExpiryDate;
    }

    /**
     * @param mixed $couponGroupExpiryDate
     */
    public function setCouponGroupExpiryDate($couponGroupExpiryDate): void
    {
        $this->couponGroupExpiryDate = $couponGroupExpiryDate;
    }

    /**
     * @return mixed
     */
    public function getCouponGroupDiscountType()
    {
        return $this->couponGroupDiscountType;
    }

    /**
     * @param mixed $couponGroupDiscountType
     */
    public function setCouponGroupDiscountType($couponGroupDiscountType): void
    {
        $this->couponGroupDiscountType = $couponGroupDiscountType;
    }

    /**
     * @return mixed
     */
    public function getCouponGroupDiscountEffect()
    {
        return $this->couponGroupDiscountEffect;
    }

    /**
     * @param mixed $couponGroupDiscountEffect
     */
    public function setCouponGroupDiscountEffect($couponGroupDiscountEffect): void
    {
        $this->couponGroupDiscountEffect = $couponGroupDiscountEffect;
    }

    /**
     * @return mixed
     */
    public function getCouponGroupMinimumInvoicePrice()
    {
        return $this->couponGroupMinimumInvoicePrice;
    }

    /**
     * @param mixed $couponGroupMinimumInvoicePrice
     */
    public function setCouponGroupMinimumInvoicePrice($couponGroupMinimumInvoicePrice): void
    {
        $this->couponGroupMinimumInvoicePrice = $couponGroupMinimumInvoicePrice;
    }

    /**
     * @return mixed
     */
    public function getCouponGroupIsPrivate()
    {
        return $this->couponGroupIsPrivate;
    }

    /**
     * @param mixed $couponGroupIsPrivate
     */
    public function setCouponGroupIsPrivate($couponGroupIsPrivate): void
    {
        $this->couponGroupIsPrivate = $couponGroupIsPrivate;
    }

    /**
     * @return mixed
     */
    public function getCouponGroupUsageTimes()
    {
        return $this->couponGroupUsageTimes;
    }

    /**
     * @param mixed $couponGroupUsageTimes
     */
    public function setCouponGroupUsageTimes($couponGroupUsageTimes): void
    {
        $this->couponGroupUsageTimes = $couponGroupUsageTimes;
    }

    /**
     * @return mixed
     */
    public function getCouponGroupUsageDescription()
    {
        return $this->couponGroupUsageDescription;
    }

    /**
     * @param mixed $couponGroupUsageDescription
     */
    public function setCouponGroupUsageDescription($couponGroupUsageDescription): void
    {
        $this->couponGroupUsageDescription = $couponGroupUsageDescription;
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param mixed $orderId
     */
    public function setOrderId($orderId): void
    {
        $this->orderId = $orderId;
    }

    /**
     * @return mixed
     */
    public function getCouponGroupLeftUsageTimes()
    {
        return $this->couponGroupLeftUsageTimes;
    }

    /**
     * @param mixed $couponGroupLeftUsageTimes
     */
    public function setCouponGroupLeftUsageTimes($couponGroupLeftUsageTimes): void
    {
        $this->couponGroupLeftUsageTimes = $couponGroupLeftUsageTimes;
    }

    /**
     * @return mixed
     */
    public function getCouponGroupCreatePerson()
    {
        return $this->couponGroupCreatePerson;
    }

    /**
     * @param mixed $couponGroupCreatePerson
     */
    public function setCouponGroupCreatePerson($couponGroupCreatePerson): void
    {
        $this->couponGroupCreatePerson = $couponGroupCreatePerson;
    }

    /**
     * @return mixed
     */
    public function getCouponGroupCreateDate()
    {
        return $this->couponGroupCreateDate;
    }

    /**
     * @param mixed $couponGroupCreateDate
     */
    public function setCouponGroupCreateDate($couponGroupCreateDate): void
    {
        $this->couponGroupCreateDate = $couponGroupCreateDate;
    }

    /**
     * @param mixed $couponGroupUsePerson
     */
    public function setCouponGroupUsePerson($couponGroupUsePerson): void
    {
        $this->couponGroupUsePerson = $couponGroupUsePerson;
    }

    /**
     * @return mixed
     */
    public function getCouponGroupStatus()
    {
        return $this->couponGroupStatus;
    }

    /**
     * @param mixed $couponGroupStatus
     */
    public function setCouponGroupStatus($couponGroupStatus): void
    {
        $this->couponGroupStatus = $couponGroupStatus;
    }

    /**
     * @return mixed
     */
    public function getCouponGroupAllowedPeople()
    {
        return $this->couponGroupAllowedPeople;
    }

    /**
     * @param mixed $couponGroupAllowedPeople
     */
    public function setCouponGroupAllowedPeople($couponGroupAllowedPeople): void
    {
        $this->couponGroupAllowedPeople = $couponGroupAllowedPeople;
    }

    /**
     * @return mixed
     */
    public function getCouponGroupConfirmStatus()
    {
        return $this->couponGroupConfirmStatus;
    }

    /**
     * @param mixed $couponGroupConfirmStatus
     */
    public function setCouponGroupConfirmStatus($couponGroupConfirmStatus): void
    {
        $this->couponGroupConfirmStatus = $couponGroupConfirmStatus;
    }

    /**
     * @return mixed
     */
    public function getCouponGroupConfirmPerson()
    {
        return $this->couponGroupConfirmPerson;
    }

    /**
     * @param mixed $couponGroupConfirmPerson
     */
    public function setCouponGroupConfirmPerson($couponGroupConfirmPerson): void
    {
        $this->couponGroupConfirmPerson = $couponGroupConfirmPerson;
    }

    /**
     * @return mixed
     */
    public function getCouponGroupConfirmDate()
    {
        return $this->couponGroupConfirmDate;
    }

    /**
     * @param mixed $couponGroupConfirmDate
     */
    public function setCouponGroupConfirmDate($couponGroupConfirmDate): void
    {
        $this->couponGroupConfirmDate = $couponGroupConfirmDate;
    }

    /**
     * @return mixed
     */
    public function getCouponGroupUsedPeople()
    {
        return $this->couponGroupUsedPeople;
    }

    /**
     * @param mixed $couponGroupUsedPeople
     */
    public function setCouponGroupUsedPeople($couponGroupUsedPeople): void
    {
        $this->couponGroupUsedPeople = $couponGroupUsedPeople;
    }

    /**
     * @return mixed
     */
    public function getCouponGroupSerial()
    {
        return $this->couponGroupSerial;
    }

    /**
     * @param mixed $couponGroupSerial
     */
    public function setCouponGroupSerial($couponGroupSerial): void
    {
        $this->couponGroupSerial = $couponGroupSerial;
    }

}