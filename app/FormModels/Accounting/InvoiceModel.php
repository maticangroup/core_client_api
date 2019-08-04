<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/14/2019
 * Time: 12:41 PM
 */

namespace Matican\FormModels\Accounting;


class InvoiceModel
{
    private $invoiceId;
    private $invoiceName;
    private $invoiceCreateDate;
    private $invoiceCreatePerson;
    private $invoiceTotalPrice;
    private $invoiceVat;
    private $invoiceInterest;
    private $invoiceGroupId;
    private $invoiceGroupName;
    private $invoiceTypeId;
    private $invoiceTypeName;
    private $invoiceTypeMachineName;
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
    private $invoiceDescription;
    private $invoiceItems;
    private $invoiceSerial;
    private $invoiceStatusName;
    private $invoiceStatusMachineName;
    private $invoiceStatusColor;
    private $invoicePaymentRequest;

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
    public function getInvoiceName()
    {
        return $this->invoiceName;
    }

    /**
     * @param mixed $invoiceName
     */
    public function setInvoiceName($invoiceName): void
    {
        $this->invoiceName = $invoiceName;
    }

    /**
     * @return mixed
     */
    public function getInvoiceCreateDate()
    {
        return $this->invoiceCreateDate;
    }

    /**
     * @param mixed $invoiceCreateDate
     */
    public function setInvoiceCreateDate($invoiceCreateDate): void
    {
        $this->invoiceCreateDate = $invoiceCreateDate;
    }

    /**
     * @return mixed
     */
    public function getInvoiceCreatePerson()
    {
        return $this->invoiceCreatePerson;
    }

    /**
     * @param mixed $invoiceCreatePerson
     */
    public function setInvoiceCreatePerson($invoiceCreatePerson): void
    {
        $this->invoiceCreatePerson = $invoiceCreatePerson;
    }

    /**
     * @return mixed
     */
    public function getInvoiceTotalPrice()
    {
        return $this->invoiceTotalPrice;
    }

    /**
     * @param mixed $invoiceTotalPrice
     */
    public function setInvoiceTotalPrice($invoiceTotalPrice): void
    {
        $this->invoiceTotalPrice = $invoiceTotalPrice;
    }

    /**
     * @return mixed
     */
    public function getInvoiceVat()
    {
        return $this->invoiceVat;
    }

    /**
     * @param mixed $invoiceVat
     */
    public function setInvoiceVat($invoiceVat): void
    {
        $this->invoiceVat = $invoiceVat;
    }

    /**
     * @return mixed
     */
    public function getInvoiceInterest()
    {
        return $this->invoiceInterest;
    }

    /**
     * @param mixed $invoiceInterest
     */
    public function setInvoiceInterest($invoiceInterest): void
    {
        $this->invoiceInterest = $invoiceInterest;
    }

    /**
     * @return mixed
     */
    public function getInvoiceGroupId()
    {
        return $this->invoiceGroupId;
    }

    /**
     * @param mixed $invoiceGroupId
     */
    public function setInvoiceGroupId($invoiceGroupId): void
    {
        $this->invoiceGroupId = $invoiceGroupId;
    }

    /**
     * @return mixed
     */
    public function getInvoiceGroupName()
    {
        return $this->invoiceGroupName;
    }

    /**
     * @param mixed $invoiceGroupName
     */
    public function setInvoiceGroupName($invoiceGroupName): void
    {
        $this->invoiceGroupName = $invoiceGroupName;
    }

    /**
     * @return mixed
     */
    public function getInvoiceTypeId()
    {
        return $this->invoiceTypeId;
    }

    /**
     * @param mixed $invoiceTypeId
     */
    public function setInvoiceTypeId($invoiceTypeId): void
    {
        $this->invoiceTypeId = $invoiceTypeId;
    }

    /**
     * @return mixed
     */
    public function getInvoiceTypeName()
    {
        return $this->invoiceTypeName;
    }

    /**
     * @param mixed $invoiceTypeName
     */
    public function setInvoiceTypeName($invoiceTypeName): void
    {
        $this->invoiceTypeName = $invoiceTypeName;
    }

    /**
     * @return mixed
     */
    public function getInvoiceTypeMachineName()
    {
        return $this->invoiceTypeMachineName;
    }

    /**
     * @param mixed $invoiceTypeMachineName
     */
    public function setInvoiceTypeMachineName($invoiceTypeMachineName): void
    {
        $this->invoiceTypeMachineName = $invoiceTypeMachineName;
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
    public function getInvoiceDescription()
    {
        return $this->invoiceDescription;
    }

    /**
     * @param mixed $invoiceDescription
     */
    public function setInvoiceDescription($invoiceDescription): void
    {
        $this->invoiceDescription = $invoiceDescription;
    }

    /**
     * @return mixed
     */
    public function getInvoiceItems()
    {
        return $this->invoiceItems;
    }

    /**
     * @param mixed $invoiceItems
     */
    public function setInvoiceItems($invoiceItems): void
    {
        $this->invoiceItems = $invoiceItems;
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
    public function getInvoiceSerial()
    {
        return $this->invoiceSerial;
    }

    /**
     * @param mixed $invoiceSerial
     */
    public function setInvoiceSerial($invoiceSerial): void
    {
        $this->invoiceSerial = $invoiceSerial;
    }

    /**
     * @return mixed
     */
    public function getInvoiceStatusName()
    {
        return $this->invoiceStatusName;
    }

    /**
     * @param mixed $invoiceStatusName
     */
    public function setInvoiceStatusName($invoiceStatusName): void
    {
        $this->invoiceStatusName = $invoiceStatusName;
    }

    /**
     * @return mixed
     */
    public function getInvoiceStatusMachineName()
    {
        return $this->invoiceStatusMachineName;
    }

    /**
     * @param mixed $invoiceStatusMachineName
     */
    public function setInvoiceStatusMachineName($invoiceStatusMachineName): void
    {
        $this->invoiceStatusMachineName = $invoiceStatusMachineName;
    }

    /**
     * @return mixed
     */
    public function getInvoiceStatusColor()
    {
        return $this->invoiceStatusColor;
    }

    /**
     * @param mixed $invoiceStatusColor
     */
    public function setInvoiceStatusColor($invoiceStatusColor): void
    {
        $this->invoiceStatusColor = $invoiceStatusColor;
    }

    /**
     * @return mixed
     */
    public function getInvoicePaymentRequest()
    {
        return $this->invoicePaymentRequest;
    }

    /**
     * @param mixed $invoicePaymentRequest
     */
    public function setInvoicePaymentRequest($invoicePaymentRequest): void
    {
        $this->invoicePaymentRequest = $invoicePaymentRequest;
    }
}