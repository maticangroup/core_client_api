<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/14/2019
 * Time: 1:05 PM
 */

namespace Matican\FormModels\Accounting;


class PaymentModel
{
    private $paymentId;
    private $paymentCreateDate;
    private $paymentDueDate;
    private $paymentPaidDate;
    private $paymentAmount;
    private $paymentMethodId;
    private $paymentMethodName;
    private $paymentMethodMachineName;
    private $invoiceFromPersonId;
    private $invoiceFromPersonFirstName;
    private $invoiceFromPersonLastName;
    private $invoiceFromPersonPhone;
    private $invoiceToPersonId;
    private $invoiceToPersonFirstName;
    private $invoiceToPersonLastName;
    private $invoiceToPersonPhone;
    private $invoiceFromCompanyId;
    private $invoiceFromCompanyName;
    private $invoiceFromCompanyPhone;
    private $invoiceToCompanyId;
    private $invoiceToCompanyName;
    private $invoiceToCompanyPhone;
    private $paymentFollowToken;
    private $paymentType;
    private $paymentStatus;
    private $paymentRequestId;

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

    /**
     * @return mixed
     */
    public function getPaymentCreateDate()
    {
        return $this->paymentCreateDate;
    }

    /**
     * @param mixed $paymentCreateDate
     */
    public function setPaymentCreateDate($paymentCreateDate): void
    {
        $this->paymentCreateDate = $paymentCreateDate;
    }

    /**
     * @return mixed
     */
    public function getPaymentDueDate()
    {
        return $this->paymentDueDate;
    }

    /**
     * @param mixed $paymentDueDate
     */
    public function setPaymentDueDate($paymentDueDate): void
    {
        $this->paymentDueDate = $paymentDueDate;
    }

    /**
     * @return mixed
     */
    public function getPaymentPaidDate()
    {
        return $this->paymentPaidDate;
    }

    /**
     * @param mixed $paymentPaidDate
     */
    public function setPaymentPaidDate($paymentPaidDate): void
    {
        $this->paymentPaidDate = $paymentPaidDate;
    }

    /**
     * @return mixed
     */
    public function getPaymentAmount()
    {
        return $this->paymentAmount;
    }

    /**
     * @param mixed $paymentAmount
     */
    public function setPaymentAmount($paymentAmount): void
    {
        $this->paymentAmount = $paymentAmount;
    }

    /**
     * @return mixed
     */
    public function getPaymentMethodId()
    {
        return $this->paymentMethodId;
    }

    /**
     * @param mixed $paymentMethodId
     */
    public function setPaymentMethodId($paymentMethodId): void
    {
        $this->paymentMethodId = $paymentMethodId;
    }

    /**
     * @return mixed
     */
    public function getPaymentMethodName()
    {
        return $this->paymentMethodName;
    }

    /**
     * @param mixed $paymentMethodName
     */
    public function setPaymentMethodName($paymentMethodName): void
    {
        $this->paymentMethodName = $paymentMethodName;
    }

    /**
     * @return mixed
     */
    public function getPaymentFollowToken()
    {
        return $this->paymentFollowToken;
    }

    /**
     * @param mixed $paymentFollowToken
     */
    public function setPaymentFollowToken($paymentFollowToken): void
    {
        $this->paymentFollowToken = $paymentFollowToken;
    }

    /**
     * @return mixed
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * @param mixed $paymentType
     */
    public function setPaymentType($paymentType): void
    {
        $this->paymentType = $paymentType;
    }

    /**
     * @return mixed
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }

    /**
     * @param mixed $paymentStatus
     */
    public function setPaymentStatus($paymentStatus): void
    {
        $this->paymentStatus = $paymentStatus;
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

    /**
     * @return mixed
     */
    public function getInvoiceFromPersonId()
    {
        return $this->invoiceFromPersonId;
    }

    /**
     * @param mixed $invoiceFromPersonId
     */
    public function setInvoiceFromPersonId($invoiceFromPersonId): void
    {
        $this->invoiceFromPersonId = $invoiceFromPersonId;
    }

    /**
     * @return mixed
     */
    public function getInvoiceFromPersonFirstName()
    {
        return $this->invoiceFromPersonFirstName;
    }

    /**
     * @param mixed $invoiceFromPersonFirstName
     */
    public function setInvoiceFromPersonFirstName($invoiceFromPersonFirstName): void
    {
        $this->invoiceFromPersonFirstName = $invoiceFromPersonFirstName;
    }

    /**
     * @return mixed
     */
    public function getInvoiceFromPersonLastName()
    {
        return $this->invoiceFromPersonLastName;
    }

    /**
     * @param mixed $invoiceFromPersonLastName
     */
    public function setInvoiceFromPersonLastName($invoiceFromPersonLastName): void
    {
        $this->invoiceFromPersonLastName = $invoiceFromPersonLastName;
    }

    /**
     * @return mixed
     */
    public function getInvoiceFromPersonPhone()
    {
        return $this->invoiceFromPersonPhone;
    }

    /**
     * @param mixed $invoiceFromPersonPhone
     */
    public function setInvoiceFromPersonPhone($invoiceFromPersonPhone): void
    {
        $this->invoiceFromPersonPhone = $invoiceFromPersonPhone;
    }

    /**
     * @return mixed
     */
    public function getInvoiceToPersonId()
    {
        return $this->invoiceToPersonId;
    }

    /**
     * @param mixed $invoiceToPersonId
     */
    public function setInvoiceToPersonId($invoiceToPersonId): void
    {
        $this->invoiceToPersonId = $invoiceToPersonId;
    }

    /**
     * @return mixed
     */
    public function getInvoiceToPersonFirstName()
    {
        return $this->invoiceToPersonFirstName;
    }

    /**
     * @param mixed $invoiceToPersonFirstName
     */
    public function setInvoiceToPersonFirstName($invoiceToPersonFirstName): void
    {
        $this->invoiceToPersonFirstName = $invoiceToPersonFirstName;
    }

    /**
     * @return mixed
     */
    public function getInvoiceToPersonLastName()
    {
        return $this->invoiceToPersonLastName;
    }

    /**
     * @param mixed $invoiceToPersonLastName
     */
    public function setInvoiceToPersonLastName($invoiceToPersonLastName): void
    {
        $this->invoiceToPersonLastName = $invoiceToPersonLastName;
    }

    /**
     * @return mixed
     */
    public function getInvoiceToPersonPhone()
    {
        return $this->invoiceToPersonPhone;
    }

    /**
     * @param mixed $invoiceToPersonPhone
     */
    public function setInvoiceToPersonPhone($invoiceToPersonPhone): void
    {
        $this->invoiceToPersonPhone = $invoiceToPersonPhone;
    }

    /**
     * @return mixed
     */
    public function getInvoiceFromCompanyId()
    {
        return $this->invoiceFromCompanyId;
    }

    /**
     * @param mixed $invoiceFromCompanyId
     */
    public function setInvoiceFromCompanyId($invoiceFromCompanyId): void
    {
        $this->invoiceFromCompanyId = $invoiceFromCompanyId;
    }

    /**
     * @return mixed
     */
    public function getInvoiceFromCompanyName()
    {
        return $this->invoiceFromCompanyName;
    }

    /**
     * @param mixed $invoiceFromCompanyName
     */
    public function setInvoiceFromCompanyName($invoiceFromCompanyName): void
    {
        $this->invoiceFromCompanyName = $invoiceFromCompanyName;
    }

    /**
     * @return mixed
     */
    public function getInvoiceFromCompanyPhone()
    {
        return $this->invoiceFromCompanyPhone;
    }

    /**
     * @param mixed $invoiceFromCompanyPhone
     */
    public function setInvoiceFromCompanyPhone($invoiceFromCompanyPhone): void
    {
        $this->invoiceFromCompanyPhone = $invoiceFromCompanyPhone;
    }

    /**
     * @return mixed
     */
    public function getInvoiceToCompanyId()
    {
        return $this->invoiceToCompanyId;
    }

    /**
     * @param mixed $invoiceToCompanyId
     */
    public function setInvoiceToCompanyId($invoiceToCompanyId): void
    {
        $this->invoiceToCompanyId = $invoiceToCompanyId;
    }

    /**
     * @return mixed
     */
    public function getInvoiceToCompanyName()
    {
        return $this->invoiceToCompanyName;
    }

    /**
     * @param mixed $invoiceToCompanyName
     */
    public function setInvoiceToCompanyName($invoiceToCompanyName): void
    {
        $this->invoiceToCompanyName = $invoiceToCompanyName;
    }

    /**
     * @return mixed
     */
    public function getInvoiceToCompanyPhone()
    {
        return $this->invoiceToCompanyPhone;
    }

    /**
     * @param mixed $invoiceToCompanyPhone
     */
    public function setInvoiceToCompanyPhone($invoiceToCompanyPhone): void
    {
        $this->invoiceToCompanyPhone = $invoiceToCompanyPhone;
    }

    /**
     * @return mixed
     */
    public function getPaymentMethodMachineName()
    {
        return $this->paymentMethodMachineName;
    }

    /**
     * @param mixed $paymentMethodMachineName
     */
    public function setPaymentMethodMachineName($paymentMethodMachineName): void
    {
        $this->paymentMethodMachineName = $paymentMethodMachineName;
    }
}