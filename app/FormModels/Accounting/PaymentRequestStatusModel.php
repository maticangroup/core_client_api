<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/17/2019
 * Time: 2:30 PM
 */

namespace Matican\FormModels\Accounting;


class PaymentRequestStatusModel
{
    private $paymentRequestStatusId;
    private $paymentRequestStatusName;
    private $paymentRequestStatusMachineName;
    private $paymentRequestStatusColor;
    private $paymentRequestId;

    /**
     * @return mixed
     */
    public function getPaymentRequestStatusId()
    {
        return $this->paymentRequestStatusId;
    }

    /**
     * @param mixed $paymentRequestStatusId
     */
    public function setPaymentRequestStatusId($paymentRequestStatusId): void
    {
        $this->paymentRequestStatusId = $paymentRequestStatusId;
    }

    /**
     * @return mixed
     */
    public function getPaymentRequestStatusName()
    {
        return $this->paymentRequestStatusName;
    }

    /**
     * @param mixed $paymentRequestStatusName
     */
    public function setPaymentRequestStatusName($paymentRequestStatusName): void
    {
        $this->paymentRequestStatusName = $paymentRequestStatusName;
    }

    /**
     * @return mixed
     */
    public function getPaymentRequestStatusMachineName()
    {
        return $this->paymentRequestStatusMachineName;
    }

    /**
     * @param mixed $paymentRequestStatusMachineName
     */
    public function setPaymentRequestStatusMachineName($paymentRequestStatusMachineName): void
    {
        $this->paymentRequestStatusMachineName = $paymentRequestStatusMachineName;
    }

    /**
     * @return mixed
     */
    public function getPaymentRequestStatusColor()
    {
        return $this->paymentRequestStatusColor;
    }

    /**
     * @param mixed $paymentRequestStatusColor
     */
    public function setPaymentRequestStatusColor($paymentRequestStatusColor): void
    {
        $this->paymentRequestStatusColor = $paymentRequestStatusColor;
    }

    /**
     * @return mixed
     */
    public function getPaymentRequestId()
    {
        return $this->paymentRequestId;
    }

    /**
     * @param mixed $paymentRequestId
     */
    public function setPaymentRequestId($paymentRequestId): void
    {
        $this->paymentRequestId = $paymentRequestId;
    }
}