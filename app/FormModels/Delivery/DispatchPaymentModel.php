<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/16/2019
 * Time: 12:02 PM
 */

namespace App\FormModels\Delivery;


class DispatchPaymentModel
{
    private $dispatchPaymentId;
    private $dispatchPaymentName;
    private $dispatchPaymentAmount;
    private $dispatchPaymentStatus;
    private $dispatchSerial;
    private $dispatchId;
    private $deliveryPersonId;

    /**
     * @return mixed
     */
    public function getDispatchPaymentId()
    {
        return $this->dispatchPaymentId;
    }

    /**
     * @param mixed $dispatchPaymentId
     */
    public function setDispatchPaymentId($dispatchPaymentId): void
    {
        $this->dispatchPaymentId = $dispatchPaymentId;
    }

    /**
     * @return mixed
     */
    public function getDispatchPaymentName()
    {
        return $this->dispatchPaymentName;
    }

    /**
     * @param mixed $dispatchPaymentName
     */
    public function setDispatchPaymentName($dispatchPaymentName): void
    {
        $this->dispatchPaymentName = $dispatchPaymentName;
    }

    /**
     * @return mixed
     */
    public function getDispatchPaymentAmount()
    {
        return $this->dispatchPaymentAmount;
    }

    /**
     * @param mixed $dispatchPaymentAmount
     */
    public function setDispatchPaymentAmount($dispatchPaymentAmount): void
    {
        $this->dispatchPaymentAmount = $dispatchPaymentAmount;
    }

    /**
     * @return mixed
     */
    public function getDispatchPaymentStatus()
    {
        return $this->dispatchPaymentStatus;
    }

    /**
     * @param mixed $dispatchPaymentStatus
     */
    public function setDispatchPaymentStatus($dispatchPaymentStatus): void
    {
        $this->dispatchPaymentStatus = $dispatchPaymentStatus;
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

    /**
     * @return mixed
     */
    public function getDeliveryPersonId()
    {
        return $this->deliveryPersonId;
    }

    /**
     * @param mixed $deliveryPersonId
     */
    public function setDeliveryPersonId($deliveryPersonId): void
    {
        $this->deliveryPersonId = $deliveryPersonId;
    }

    /**
     * @return mixed
     */
    public function getDispatchSerial()
    {
        return $this->dispatchSerial;
    }

    /**
     * @param mixed $dispatchSerial
     */
    public function setDispatchSerial($dispatchSerial): void
    {
        $this->dispatchSerial = $dispatchSerial;
    }
}