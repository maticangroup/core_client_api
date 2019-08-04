<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/14/2019
 * Time: 12:54 PM
 */

namespace Matican\FormModels\Accounting;


class InvoiceTypeModel
{
    private $invoiceTypeId;
    private $invoiceTypeName;
    private $invoiceTypeMachineName;
    private $invoiceId;

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
}