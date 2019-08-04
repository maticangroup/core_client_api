<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/17/2019
 * Time: 8:51 PM
 */

namespace Matican\FormModels\Accounting;


class CouponGroupConfirmStatusModel
{
    private $couponGroupConfirmStatusId;
    private $couponGroupConfirmStatusName;
    private $couponGroupConfirmStatusMachineName;
    private $couponGroupConfirmStatusColor;
    private $couponGroupId;

    /**
     * @return mixed
     */
    public function getCouponGroupConfirmStatusId()
    {
        return $this->couponGroupConfirmStatusId;
    }

    /**
     * @param mixed $couponGroupConfirmStatusId
     */
    public function setCouponGroupConfirmStatusId($couponGroupConfirmStatusId): void
    {
        $this->couponGroupConfirmStatusId = $couponGroupConfirmStatusId;
    }

    /**
     * @return mixed
     */
    public function getCouponGroupConfirmStatusName()
    {
        return $this->couponGroupConfirmStatusName;
    }

    /**
     * @param mixed $couponGroupConfirmStatusName
     */
    public function setCouponGroupConfirmStatusName($couponGroupConfirmStatusName): void
    {
        $this->couponGroupConfirmStatusName = $couponGroupConfirmStatusName;
    }

    /**
     * @return mixed
     */
    public function getCouponGroupConfirmStatusMachineName()
    {
        return $this->couponGroupConfirmStatusMachineName;
    }

    /**
     * @param mixed $couponGroupConfirmStatusMachineName
     */
    public function setCouponGroupConfirmStatusMachineName($couponGroupConfirmStatusMachineName): void
    {
        $this->couponGroupConfirmStatusMachineName = $couponGroupConfirmStatusMachineName;
    }

    /**
     * @return mixed
     */
    public function getCouponGroupConfirmStatusColor()
    {
        return $this->couponGroupConfirmStatusColor;
    }

    /**
     * @param mixed $couponGroupConfirmStatusColor
     */
    public function setCouponGroupConfirmStatusColor($couponGroupConfirmStatusColor): void
    {
        $this->couponGroupConfirmStatusColor = $couponGroupConfirmStatusColor;
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