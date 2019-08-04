<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/19/2019
 * Time: 5:59 PM
 */

namespace Matican\FormModels\CRM;


class CustomerCouponModel
{
    private $customerCouponId;
    private $customerCouponSerial;
    private $customerCouponDiscountType;
    private $customerCouponDiscountEffect;
    private $customerCouponMinimumInvoicePrice;
    private $customerCouponOrderSerial;
    private $customerCouponOrderTotalPrice;
    private $customerCouponUsedDate;
    private $customerCouponExpiryDate;

    /**
     * @return mixed
     */
    public function getCustomerCouponId()
    {
        return $this->customerCouponId;
    }

    /**
     * @param mixed $customerCouponId
     */
    public function setCustomerCouponId($customerCouponId): void
    {
        $this->customerCouponId = $customerCouponId;
    }

    /**
     * @return mixed
     */
    public function getCustomerCouponSerial()
    {
        return $this->customerCouponSerial;
    }

    /**
     * @param mixed $customerCouponSerial
     */
    public function setCustomerCouponSerial($customerCouponSerial): void
    {
        $this->customerCouponSerial = $customerCouponSerial;
    }

    /**
     * @return mixed
     */
    public function getCustomerCouponDiscountType()
    {
        return $this->customerCouponDiscountType;
    }

    /**
     * @param mixed $customerCouponDiscountType
     */
    public function setCustomerCouponDiscountType($customerCouponDiscountType): void
    {
        $this->customerCouponDiscountType = $customerCouponDiscountType;
    }

    /**
     * @return mixed
     */
    public function getCustomerCouponDiscountEffect()
    {
        return $this->customerCouponDiscountEffect;
    }

    /**
     * @param mixed $customerCouponDiscountEffect
     */
    public function setCustomerCouponDiscountEffect($customerCouponDiscountEffect): void
    {
        $this->customerCouponDiscountEffect = $customerCouponDiscountEffect;
    }

    /**
     * @return mixed
     */
    public function getCustomerCouponMinimumInvoicePrice()
    {
        return $this->customerCouponMinimumInvoicePrice;
    }

    /**
     * @param mixed $customerCouponMinimumInvoicePrice
     */
    public function setCustomerCouponMinimumInvoicePrice($customerCouponMinimumInvoicePrice): void
    {
        $this->customerCouponMinimumInvoicePrice = $customerCouponMinimumInvoicePrice;
    }

    /**
     * @return mixed
     */
    public function getCustomerCouponOrderSerial()
    {
        return $this->customerCouponOrderSerial;
    }

    /**
     * @param mixed $customerCouponOrderSerial
     */
    public function setCustomerCouponOrderSerial($customerCouponOrderSerial): void
    {
        $this->customerCouponOrderSerial = $customerCouponOrderSerial;
    }

    /**
     * @return mixed
     */
    public function getCustomerCouponOrderTotalPrice()
    {
        return $this->customerCouponOrderTotalPrice;
    }

    /**
     * @param mixed $customerCouponOrderTotalPrice
     */
    public function setCustomerCouponOrderTotalPrice($customerCouponOrderTotalPrice): void
    {
        $this->customerCouponOrderTotalPrice = $customerCouponOrderTotalPrice;
    }

    /**
     * @return mixed
     */
    public function getCustomerCouponUsedDate()
    {
        return $this->customerCouponUsedDate;
    }

    /**
     * @param mixed $customerCouponUsedDate
     */
    public function setCustomerCouponUsedDate($customerCouponUsedDate): void
    {
        $this->customerCouponUsedDate = $customerCouponUsedDate;
    }

    /**
     * @return mixed
     */
    public function getCustomerCouponExpiryDate()
    {
        return $this->customerCouponExpiryDate;
    }

    /**
     * @param mixed $customerCouponExpiryDate
     */
    public function setCustomerCouponExpiryDate($customerCouponExpiryDate): void
    {
        $this->customerCouponExpiryDate = $customerCouponExpiryDate;
    }
}