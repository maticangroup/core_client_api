<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/15/2019
 * Time: 6:25 PM
 */

namespace Matican\FormModels\Accounting;


class CouponGroupDiscountTypeModel
{
    private $couponGroupDiscountTypeId;
    private $couponGroupDiscountTypeName;
    private $couponGroupDiscountTypeMachineName;
    private $couponGroupId;

    /**
     * @return mixed
     */
    public function getCouponGroupDiscountTypeId()
    {
        return $this->couponGroupDiscountTypeId;
    }

    /**
     * @param mixed $couponGroupDiscountTypeId
     */
    public function setCouponGroupDiscountTypeId($couponGroupDiscountTypeId): void
    {
        $this->couponGroupDiscountTypeId = $couponGroupDiscountTypeId;
    }

    /**
     * @return mixed
     */
    public function getCouponGroupDiscountTypeName()
    {
        return $this->couponGroupDiscountTypeName;
    }

    /**
     * @param mixed $couponGroupDiscountTypeName
     */
    public function setCouponGroupDiscountTypeName($couponGroupDiscountTypeName): void
    {
        $this->couponGroupDiscountTypeName = $couponGroupDiscountTypeName;
    }

    /**
     * @return mixed
     */
    public function getCouponGroupDiscountTypeMachineName()
    {
        return $this->couponGroupDiscountTypeMachineName;
    }

    /**
     * @param mixed $couponGroupDiscountTypeMachineName
     */
    public function setCouponGroupDiscountTypeMachineName($couponGroupDiscountTypeMachineName): void
    {
        $this->couponGroupDiscountTypeMachineName = $couponGroupDiscountTypeMachineName;
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