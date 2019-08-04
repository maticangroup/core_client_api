<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/14/2019
 * Time: 12:49 PM
 */

namespace Matican\FormModels\Accounting;


class InvoiceItemModel
{
    private $invoiceItemId;
    private $invoiceItemName;
    private $invoiceItemQuantity;
    private $invoiceItemCurrentPrice;
    private $invoiceItemDiscountPrice;
    private $invoiceItemTotalPrice;
    private $invoiceId;

    /**
     * @return mixed
     */
    public function getInvoiceItemId()
    {
        return $this->invoiceItemId;
    }

    /**
     * @param mixed $invoiceItemId
     */
    public function setInvoiceItemId($invoiceItemId): void
    {
        $this->invoiceItemId = $invoiceItemId;
    }

    /**
     * @return mixed
     */
    public function getInvoiceItemName()
    {
        return $this->invoiceItemName;
    }

    /**
     * @param mixed $invoiceItemName
     */
    public function setInvoiceItemName($invoiceItemName): void
    {
        $this->invoiceItemName = $invoiceItemName;
    }

    /**
     * @return mixed
     */
    public function getInvoiceItemQuantity()
    {
        return $this->invoiceItemQuantity;
    }

    /**
     * @param mixed $invoiceItemQuantity
     */
    public function setInvoiceItemQuantity($invoiceItemQuantity): void
    {
        $this->invoiceItemQuantity = $invoiceItemQuantity;
    }

    /**
     * @return mixed
     */
    public function getInvoiceItemCurrentPrice()
    {
        return $this->invoiceItemCurrentPrice;
    }

    /**
     * @param mixed $invoiceItemCurrentPrice
     */
    public function setInvoiceItemCurrentPrice($invoiceItemCurrentPrice): void
    {
        $this->invoiceItemCurrentPrice = $invoiceItemCurrentPrice;
    }

    /**
     * @return mixed
     */
    public function getInvoiceItemDiscountPrice()
    {
        return $this->invoiceItemDiscountPrice;
    }

    /**
     * @param mixed $invoiceItemDiscountPrice
     */
    public function setInvoiceItemDiscountPrice($invoiceItemDiscountPrice): void
    {
        $this->invoiceItemDiscountPrice = $invoiceItemDiscountPrice;
    }

    /**
     * @return mixed
     */
    public function getInvoiceItemTotalPrice()
    {
        return $this->invoiceItemTotalPrice;
    }

    /**
     * @param mixed $invoiceItemTotalPrice
     */
    public function setInvoiceItemTotalPrice($invoiceItemTotalPrice): void
    {
        $this->invoiceItemTotalPrice = $invoiceItemTotalPrice;
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