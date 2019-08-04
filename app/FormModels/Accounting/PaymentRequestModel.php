<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/14/2019
 * Time: 12:58 PM
 */

namespace Matican\FormModels\Accounting;


class PaymentRequestModel
{
    private $paymentRequestId;
    private $paymentRequestName;
    private $paymentRequestTotalPrice;
    private $paymentRequestPayingCount;
    private $paymentRequestClearedAmount;
    private $paymentRequestDescription;
    private $paymentRequestPayments;
    private $paymentRequestTypeName;
    private $paymentRequestTypeMachineName;
    private $paymentRequestTypeColor;
    private $paymentRequestStatus;
    private $invoiceId;
    private $orderId;

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

    /**
     * @return mixed
     */
    public function getPaymentRequestName()
    {
        return $this->paymentRequestName;
    }

    /**
     * @param mixed $paymentRequestName
     */
    public function setPaymentRequestName($paymentRequestName): void
    {
        $this->paymentRequestName = $paymentRequestName;
    }

    /**
     * @return mixed
     */
    public function getPaymentRequestTotalPrice()
    {
        return $this->paymentRequestTotalPrice;
    }

    /**
     * @param mixed $paymentRequestTotalPrice
     */
    public function setPaymentRequestTotalPrice($paymentRequestTotalPrice): void
    {
        $this->paymentRequestTotalPrice = $paymentRequestTotalPrice;
    }

    /**
     * @return mixed
     */
    public function getPaymentRequestPayingCount()
    {
        return $this->paymentRequestPayingCount;
    }

    /**
     * @param mixed $paymentRequestPayingCount
     */
    public function setPaymentRequestPayingCount($paymentRequestPayingCount): void
    {
        $this->paymentRequestPayingCount = $paymentRequestPayingCount;
    }

    /**
     * @return mixed
     */
    public function getPaymentRequestClearedAmount()
    {
        return $this->paymentRequestClearedAmount;
    }

    /**
     * @param mixed $paymentRequestClearedAmount
     */
    public function setPaymentRequestClearedAmount($paymentRequestClearedAmount): void
    {
        $this->paymentRequestClearedAmount = $paymentRequestClearedAmount;
    }

    /**
     * @return mixed
     */
    public function getPaymentRequestDescription()
    {
        return $this->paymentRequestDescription;
    }

    /**
     * @param mixed $paymentRequestDescription
     */
    public function setPaymentRequestDescription($paymentRequestDescription): void
    {
        $this->paymentRequestDescription = $paymentRequestDescription;
    }

    /**
     * @return mixed
     */
    public function getPaymentRequestPayments()
    {
        return $this->paymentRequestPayments;
    }

    /**
     * @param mixed $paymentRequestPayments
     */
    public function setPaymentRequestPayments($paymentRequestPayments): void
    {
        $this->paymentRequestPayments = $paymentRequestPayments;
    }

    /**
     * @return mixed
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * @param mixed $invoiceId
     */
    public function setInvoiceId($invoiceId): void
    {
        $this->invoiceId = $invoiceId;
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param mixed $orderId
     */
    public function setOrderId($orderId): void
    {
        $this->orderId = $orderId;
    }

    /**
     * @return mixed
     */
    public function getPaymentRequestTypeName()
    {
        return $this->paymentRequestTypeName;
    }

    /**
     * @param mixed $paymentRequestTypeName
     */
    public function setPaymentRequestTypeName($paymentRequestTypeName): void
    {
        $this->paymentRequestTypeName = $paymentRequestTypeName;
    }

    /**
     * @return mixed
     */
    public function getPaymentRequestTypeMachineName()
    {
        return $this->paymentRequestTypeMachineName;
    }

    /**
     * @param mixed $paymentRequestTypeMachineName
     */
    public function setPaymentRequestTypeMachineName($paymentRequestTypeMachineName): void
    {
        $this->paymentRequestTypeMachineName = $paymentRequestTypeMachineName;
    }

    /**
     * @return mixed
     */
    public function getPaymentRequestTypeColor()
    {
        return $this->paymentRequestTypeColor;
    }

    /**
     * @param mixed $paymentRequestTypeColor
     */
    public function setPaymentRequestTypeColor($paymentRequestTypeColor): void
    {
        $this->paymentRequestTypeColor = $paymentRequestTypeColor;
    }

    /**
     * @return mixed
     */
    public function getPaymentRequestStatus()
    {
        return $this->paymentRequestStatus;
    }

    /**
     * @param mixed $paymentRequestStatus
     */
    public function setPaymentRequestStatus($paymentRequestStatus): void
    {
        $this->paymentRequestStatus = $paymentRequestStatus;
    }
}