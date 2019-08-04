<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/17/2019
 * Time: 8:33 PM
 */

namespace Matican\FormModels\Accounting;


class UsedCouponModel
{
    private $usedCouponId;
    private $usedCouponOwnerId;
    private $usedCouponOwnerFirstName;
    private $usedCouponOwnerLastName;
    private $usedCouponDate;
    private $usedCouponOrderId;
    private $usedCouponOrderSerial;
    private $usedCouponOrderPrice;
    private $couponGroupId;

    /**
     * @return mixed
     */
    public function getUsedCouponId()
    {
        return $this->usedCouponId;
    }

    /**
     * @param mixed $usedCouponId
     */
    public function setUsedCouponId($usedCouponId): void
    {
        $this->usedCouponId = $usedCouponId;
    }

    /**
     * @return mixed
     */
    public function getUsedCouponOwnerId()
    {
        return $this->usedCouponOwnerId;
    }

    /**
     * @param mixed $usedCouponOwnerId
     */
    public function setUsedCouponOwnerId($usedCouponOwnerId): void
    {
        $this->usedCouponOwnerId = $usedCouponOwnerId;
    }

    /**
     * @return mixed
     */
    public function getUsedCouponOwnerFirstName()
    {
        return $this->usedCouponOwnerFirstName;
    }

    /**
     * @param mixed $usedCouponOwnerFirstName
     */
    public function setUsedCouponOwnerFirstName($usedCouponOwnerFirstName): void
    {
        $this->usedCouponOwnerFirstName = $usedCouponOwnerFirstName;
    }

    /**
     * @return mixed
     */
    public function getUsedCouponOwnerLastName()
    {
        return $this->usedCouponOwnerLastName;
    }

    /**
     * @param mixed $usedCouponOwnerLastName
     */
    public function setUsedCouponOwnerLastName($usedCouponOwnerLastName): void
    {
        $this->usedCouponOwnerLastName = $usedCouponOwnerLastName;
    }

    /**
     * @return mixed
     */
    public function getUsedCouponDate()
    {
        return $this->usedCouponDate;
    }

    /**
     * @param mixed $usedCouponDate
     */
    public function setUsedCouponDate($usedCouponDate): void
    {
        $this->usedCouponDate = $usedCouponDate;
    }

    /**
     * @return mixed
     */
    public function getUsedCouponOrderId()
    {
        return $this->usedCouponOrderId;
    }

    /**
     * @param mixed $usedCouponOrderId
     */
    public function setUsedCouponOrderId($usedCouponOrderId): void
    {
        $this->usedCouponOrderId = $usedCouponOrderId;
    }

    /**
     * @return mixed
     */
    public function getUsedCouponOrderSerial()
    {
        return $this->usedCouponOrderSerial;
    }

    /**
     * @param mixed $usedCouponOrderSerial
     */
    public function setUsedCouponOrderSerial($usedCouponOrderSerial): void
    {
        $this->usedCouponOrderSerial = $usedCouponOrderSerial;
    }

    /**
     * @return mixed
     */
    public function getUsedCouponOrderPrice()
    {
        return $this->usedCouponOrderPrice;
    }

    /**
     * @param mixed $usedCouponOrderPrice
     */
    public function setUsedCouponOrderPrice($usedCouponOrderPrice): void
    {
        $this->usedCouponOrderPrice = $usedCouponOrderPrice;
    }

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
}