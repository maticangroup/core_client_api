<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/15/2019
 * Time: 6:24 PM
 */

namespace Matican\FormModels\Accounting;


class CouponGroupTypeModel
{
    private $couponGroupTypeId;
    private $couponGroupTypeName;
    private $couponGroupTypeMachineName;
    private $couponGroupId;

    /**
     * @return mixed
     */
    public function getCouponGroupTypeId()
    {
        return $this->couponGroupTypeId;
    }

    /**
     * @param mixed $couponGroupTypeId
     */
    public function setCouponGroupTypeId($couponGroupTypeId): void
    {
        $this->couponGroupTypeId = $couponGroupTypeId;
    }

    /**
     * @return mixed
     */
    public function getCouponGroupTypeName()
    {
        return $this->couponGroupTypeName;
    }

    /**
     * @param mixed $couponGroupTypeName
     */
    public function setCouponGroupTypeName($couponGroupTypeName): void
    {
        $this->couponGroupTypeName = $couponGroupTypeName;
    }

    /**
     * @return mixed
     */
    public function getCouponGroupTypeMachineName()
    {
        return $this->couponGroupTypeMachineName;
    }

    /**
     * @param mixed $couponGroupTypeMachineName
     */
    public function setCouponGroupTypeMachineName($couponGroupTypeMachineName): void
    {
        $this->couponGroupTypeMachineName = $couponGroupTypeMachineName;
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