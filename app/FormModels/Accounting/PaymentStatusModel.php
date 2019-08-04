<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/14/2019
 * Time: 1:11 PM
 */

namespace Matican\FormModels\Accounting;


class PaymentStatusModel
{
    private $paymentStatusId;
    private $paymentStatusName;
    private $paymentStatusMachineName;
    private $paymentStatusColor;
    private $paymentId;

    /**
     * @return mixed
     */
    public function getPaymentStatusId()
    {
        return $this->paymentStatusId;
    }

    /**
     * @param mixed $paymentStatusId
     */
    public function setPaymentStatusId($paymentStatusId): void
    {
        $this->paymentStatusId = $paymentStatusId;
    }

    /**
     * @return mixed
     */
    public function getPaymentStatusName()
    {
        return $this->paymentStatusName;
    }

    /**
     * @param mixed $paymentStatusName
     */
    public function setPaymentStatusName($paymentStatusName): void
    {
        $this->paymentStatusName = $paymentStatusName;
    }

    /**
     * @return mixed
     */
    public function getPaymentStatusMachineName()
    {
        return $this->paymentStatusMachineName;
    }

    /**
     * @param mixed $paymentStatusMachineName
     */
    public function setPaymentStatusMachineName($paymentStatusMachineName): void
    {
        $this->paymentStatusMachineName = $paymentStatusMachineName;
    }

    /**
     * @return mixed
     */
    public function getPaymentStatusColor()
    {
        return $this->paymentStatusColor;
    }

    /**
     * @param mixed $paymentStatusColor
     */
    public function setPaymentStatusColor($paymentStatusColor): void
    {
        $this->paymentStatusColor = $paymentStatusColor;
    }

    /**
     * @return mixed
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }

    /**
     * @param mixed $paymentId
     */
    public function setPaymentId($paymentId): void
    {
        $this->paymentId = $paymentId;
    }
}