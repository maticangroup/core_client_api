<?php

namespace Matican\Models\Accounting;

use Matican\Core\Concepts\CRUDActions;
use Matican\Models\Repository\Company;
use Matican\Models\Repository\Person;
use Matican\Core\DataTypes\DateTime;
use Matican\Core\DataTypes\Money;
use Matican\Core\DataTypes\Text;
use Matican\Core\DataTypes\VAT;


class Invoice extends CRUDActions
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
     * @param VAT
     */
    private $vat;

    /**
     * @param Money
     */
    private $total_price;

    /**
     * @param Text
     */
    private $description;

    /**
     * @param Person
     */
    private $from_person;

    /**
     * @param Person
     */
    private $to_person;

    /**
     * @param Company
     */
    private $from_company;

    /**
     * @param Company
     */
    private $to_company;

    /**
     * @param InvoiceGroup
     */
    private $invoiceGroup;

    /**
     * @param InvoiceItem
     */
//    private $invoiceItems;

    /**
     * @param InvoiceStatus
     */
    private $invoiceStatus;

    /**
     * @param InvoiceType
     */
    private $invoiceType;

    /**
     * @param PaymentRequest
     */
    private $paymentRequest;

    public function __construct()
    {
//        $this->invoiceItems = [];
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
     * @return $this
     */
    public function setCreateDate(DateTime $create_date)
    {
        $this->create_date = $create_date;

        return $this;
    }

    /**
     * @return VAT
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * @param VAT $vat
     * @return Invoice
     */
    public function setVat(VAT $vat)
    {
        $this->vat = $vat;

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
     * @return Invoice
     */
    public function setTotalPrice(Money $total_price)
    {
        $this->total_price = $total_price;

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
     * @return $this
     */
    public function setDescription(Text $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Person
     */
    public function getFromPerson()
    {
        return $this->from_person;
    }

    /**
     * @param Person $from_person
     * @return Invoice
     */
    public function setFromPerson(Person $from_person)
    {
        $this->from_person = $from_person;

        return $this;
    }

    /**
     * @return Person
     */
    public function getToPerson()
    {
        return $this->to_person;
    }

    /**
     * @param Person $to_person
     * @return Invoice
     */
    public function setToPerson(Person $to_person)
    {
        $this->to_person = $to_person;

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
     * @return Invoice
     */
    public function setFromCompany(Company $from_company)
    {
        $this->from_company = $from_company;

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
     * @return Invoice
     */
    public function setToCompany(Company $to_company)
    {
        $this->to_company = $to_company;

        return $this;
    }

    /**
     * @return InvoiceGroup
     */
    public function getInvoiceGroup()
    {
        return $this->invoiceGroup;
    }

    /**
     * @param InvoiceGroup $invoiceGroup
     * @return Invoice
     */
    public function setInvoiceGroup(InvoiceGroup $invoiceGroup)
    {
        $this->invoiceGroup = $invoiceGroup;

        return $this;
    }


    public function getInvoiceItems()
    {
//        return $this->invoiceItems;
    }


    /**
     * @return InvoiceStatus
     */
    public function getInvoiceStatus()
    {
        return $this->invoiceStatus;
    }

    /**
     * @param InvoiceStatus $invoiceStatus
     * @return Invoice
     */
    public function setInvoiceStatus(InvoiceStatus $invoiceStatus)
    {
        $this->invoiceStatus = $invoiceStatus;

        return $this;
    }

    /**
     * @return InvoiceType
     */
    public function getInvoiceType()
    {
        return $this->invoiceType;
    }

    /**
     * @param InvoiceType $invoiceType
     * @return Invoice
     */
    public function setInvoiceType(InvoiceType $invoiceType)
    {
        $this->invoiceType = $invoiceType;

        return $this;
    }

    /**
     * @return PaymentRequest
     */
    public function getPaymentRequest()
    {
        return $this->paymentRequest;
    }

    /**
     * @param PaymentRequest $paymentRequest
     */
    public function setPaymentRequest(PaymentRequest $paymentRequest)
    {
        $this->paymentRequest = $paymentRequest;
    }

    public function changeInvoiceStatus($machineName)
    {
        return "";
    }

    public function changeInvoiceType($machineName)
    {
        return "";
    }

    public function addInvoiceItem()
    {
        return "";
    }

    public function removeInvoiceItem()
    {
        return "";
    }
}
