<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/16/2019
 * Time: 12:05 PM
 */

namespace App\FormModels\Delivery;


class DispatchPaymentStatusModel
{
    private $dispatchPaymentStatusId;
    private $dispatchPaymentStatusName;
    private $dispatchPaymentStatusMachineName;
    private $dispatchPaymentStatusColor;
    private $dispatchId;

    /**
     * @return mixed
     */
    public function getDispatchPaymentStatusId()
    {
        return $this->dispatchPaymentStatusId;
    }

    /**
     * @param mixed $dispatchPaymentStatusId
     */
    public function setDispatchPaymentStatusId($dispatchPaymentStatusId): void
    {
        $this->dispatchPaymentStatusId = $dispatchPaymentStatusId;
    }

    /**
     * @return mixed
     */
    public function getDispatchPaymentStatusName()
    {
        return $this->dispatchPaymentStatusName;
    }

    /**
     * @param mixed $dispatchPaymentStatusName
     */
    public function setDispatchPaymentStatusName($dispatchPaymentStatusName): void
    {
        $this->dispatchPaymentStatusName = $dispatchPaymentStatusName;
    }

    /**
     * @return mixed
     */
    public function getDispatchPaymentStatusMachineName()
    {
        return $this->dispatchPaymentStatusMachineName;
    }

    /**
     * @param mixed $dispatchPaymentStatusMachineName
     */
    public function setDispatchPaymentStatusMachineName($dispatchPaymentStatusMachineName): void
    {
        $this->dispatchPaymentStatusMachineName = $dispatchPaymentStatusMachineName;
    }

    /**
     * @return mixed
     */
    public function getDispatchPaymentStatusColor()
    {
        return $this->dispatchPaymentStatusColor;
    }

    /**
     * @param mixed $dispatchPaymentStatusColor
     */
    public function setDispatchPaymentStatusColor($dispatchPaymentStatusColor): void
    {
        $this->dispatchPaymentStatusColor = $dispatchPaymentStatusColor;
    }

    /**
     * @return mixed
     */
    public function getDispatchId()
    {
        return $this->dispatchId;
    }

    /**
     * @param mixed $dispatchId
     */
    public function setDispatchId($dispatchId): void
    {
        $this->dispatchId = $dispatchId;
    }
}