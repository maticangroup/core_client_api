<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/15/2019
 * Time: 6:26 PM
 */

namespace Matican\FormModels\Accounting;


class CouponGroupStatusModel
{
    private $couponGroupStatusId;
    private $couponGroupStatusName;
    private $couponGroupStatusMachineName;
    private $couponGroupStatusColor;
    private $couponGroupId;

    /**
     * @return mixed
     */
    public function getCouponGroupStatusId()
    {
        return $this->couponGroupStatusId;
    }

    /**
     * @param mixed $couponGroupStatusId
     */
    public function setCouponGroupStatusId($couponGroupStatusId): void
    {
        $this->couponGroupStatusId = $couponGroupStatusId;
    }

    /**
     * @return mixed
     */
    public function getCouponGroupStatusName()
    {
        return $this->couponGroupStatusName;
    }

    /**
     * @param mixed $couponGroupStatusName
     */
    public function setCouponGroupStatusName($couponGroupStatusName): void
    {
        $this->couponGroupStatusName = $couponGroupStatusName;
    }

    /**
     * @return mixed
     */
    public function getCouponGroupStatusMachineName()
    {
        return $this->couponGroupStatusMachineName;
    }

    /**
     * @param mixed $couponGroupStatusMachineName
     */
    public function setCouponGroupStatusMachineName($couponGroupStatusMachineName): void
    {
        $this->couponGroupStatusMachineName = $couponGroupStatusMachineName;
    }

    /**
     * @return mixed
     */
    public function getCouponGroupStatusColor()
    {
        return $this->couponGroupStatusColor;
    }

    /**
     * @param mixed $couponGroupStatusColor
     */
    public function setCouponGroupStatusColor($couponGroupStatusColor): void
    {
        $this->couponGroupStatusColor = $couponGroupStatusColor;
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