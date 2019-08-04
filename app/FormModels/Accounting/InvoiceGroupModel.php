<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/14/2019
 * Time: 12:18 PM
 */

namespace Matican\FormModels\Accounting;


class InvoiceGroupModel
{
    private $invoiceGroupId;
    private $invoiceGroupName;
    private $invoiceId;

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