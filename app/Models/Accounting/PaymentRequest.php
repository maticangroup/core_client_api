<?php

namespace App\Models\Accounting;

use App\Core\Concepts\CRUDActions;
use App\Models\Repository\Company;
use App\Models\Repository\Person;
use App\Core\DataTypes\DateTime;
use App\Core\DataTypes\Money;
use App\Core\DataTypes\Text;


class PaymentRequest extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param DateTime
     */
    private $create_date;

    /**
     * @param Person
     */
    private $from_user;

    /**
     * @param Person
     */
    private $to_user;

    /**
     * @param Company
     */
    private $to_company;

    /**
     * @param Company
     */
    private $from_company;

    /**
     * @param Text
     */
    private $description;

    /**
     * @param Payment
     */
//    private $payments;

    /**
     * @param Money
     */
    private $cleared_amount;

    /**
     * @param Money
     */
    private $total_price;

    /**
     * @param integer
     */
    private $payment_count;

    /**
     * @param DateTime
     */
    private $due_date;

    /**
     * @param PaymentRequestStatus
     */
    private $paymentRequestStatus;

    /**
     * @param PaymentRequestType
     */
    private $paymentRequestType;

    /**
     * @param Invoice
     */
//    private $invoices;

    public function __construct()
    {
//        $this->payments = [];
//        $this->invoices = [];
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return DateTime
     */
    public function getCreateDate()
    {
        return $this->create_date;
    }

    /**
     * @param DateTime $create_date
     * @return PaymentRequest
     */
    public function setCreateDate(DateTime $create_date)
    {
        $this->create_date = $create_date;

        return $this;
    }

    /**
     * @return Person
     */
    public function getFromUser()
    {
        return $this->from_user;
    }

    /**
     * @param Person $from_user
     * @return PaymentRequest
     */
    public function setFromUser(Person $from_user)
    {
        $this->from_user = $from_user;

        return $this;
    }

    /**
     * @return Person
     */
    public function getToUser()
    {
        return $this->to_user;
    }

    /**
     * @param Person $to_user
     * @return PaymentRequest
     */
    public function setToUser(Person $to_user)
    {
        $this->to_user = $to_user;

        return $this;
    }

    /**
     * @return Company
     */
    public function getToCompany()
    {
        return $this->to_company;
    }

    /**
     * @param Company $to_company
     * @return PaymentRequest
     */
    public function setToCompany(Company $to_company)
    {
        $this->to_company = $to_company;

        return $this;
    }

    /**
     * @return Company
     */
    public function getFromCompany()
    {
        return $this->from_company;
    }

    /**
     * @param Company $from_company
     * @return PaymentRequest
     */
    public function setFromCompany(Company $from_company)
    {
        $this->from_company = $from_company;

        return $this;
    }

    /**
     * @return Text
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param Text $description
     * @return PaymentRequest
     */
    public function setDescription(Text $description)
    {
        $this->description = $description;

        return $this;
    }


    public function getPayments()
    {
//        return $this->payments;
    }


    /**
     * @return Money
     */
    public function getClearedAmount()
    {
        return $this->cleared_amount;
    }

    /**
     * @param Money $cleared_amount
     * @return PaymentRequest
     */
    public function setClearedAmount(Money $cleared_amount)
    {
        $this->cleared_amount = $cleared_amount;

        return $this;
    }

    /**
     * @return Money
     */
    public function getTotalPrice()
    {
        return $this->total_price;
    }

    /**
     * @param Money $total_price
     * @return $this
     */
    public function setTotalPrice(Money $total_price)
    {
        $this->total_price = $total_price;

        return $this;
    }

    /**
     * @return integer
     */
    public function getPaymentCount()
    {
        return $this->payment_count;
    }

    /**
     * @param integer $payment_count
     * @return PaymentRequest
     */
    public function setPaymentCount($payment_count)
    {
        $this->payment_count = $payment_count;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDueDate()
    {
        return $this->due_date;
    }

    /**
     * @param DateTime $due_date
     * @return PaymentRequest
     */
    public function setDueDate(DateTime $due_date)
    {
        $this->due_date = $due_date;

        return $this;
    }

    /**
     * @return PaymentRequestStatus
     */
    public function getPaymentRequestStatus()
    {
        return $this->paymentRequestStatus;
    }

    /**
     * @param PaymentRequestStatus $paymentRequestStatus
     * @return PaymentRequest
     */
    public function setPaymentRequestStatus(PaymentRequestStatus $paymentRequestStatus)
    {
        $this->paymentRequestStatus = $paymentRequestStatus;

        return $this;
    }

    /**
     * @return PaymentRequestType
     */
    public function getPaymentRequestType()
    {
        return $this->paymentRequestType;
    }

    /**
     * @param PaymentRequestType $paymentRequestType
     * @return PaymentRequest
     */
    public function setPaymentRequestType(PaymentRequestType $paymentRequestType)
    {
        $this->paymentRequestType = $paymentRequestType;

        return $this;
    }

    public function changePaymentRequestStatus($machineName)
    {
        return "";
    }

    public function changePaymentRequestType($machineName)
    {
        return "";
    }


    public function getInvoices()
    {
//        return $this->invoices;
    }

    public function addPayment()
    {
        return "";
    }

    public function removePayment()
    {
        return "";
    }
}
