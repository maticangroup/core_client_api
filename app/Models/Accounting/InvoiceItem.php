<?php

namespace App\Models\Accounting;


use App\Core\Concepts\CRUDActions;
use App\Core\DataTypes\Money;
use App\Core\DataTypes\Quantity;

class InvoiceItem extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param string
     */
    private $name;

    /**
     * @param Quantity
     */
    private $quantity;

    /**
     * @param Money
     */
    private $unit_price;

    /**
     * @param Money
     */
    private $total_price;

    /**
     * @param Money
     */
    private $discount_amount;

    /**
     * @param Invoice
     */
    private $invoice;

    /**
     * @param InvoiceItemStatus
     */
    private $invoiceItemStatus;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param Quantity $quantity
     * @return $this
     */
    public function setQuantity(Quantity $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return Money
     */
    public function getUnitPrice()
    {
        return $this->unit_price;
    }

    /**
     * @param Money $unit_price
     * @return $this
     */
    public function setUnitPrice(Money $unit_price)
    {
        $this->unit_price = $unit_price;

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
     * @return Money
     */
    public function getDiscountAmount()
    {
        return $this->discount_amount;
    }

    /**
     * @param Money $discount_amount
     * @return $this
     */
    public function setDiscountAmount(Money $discount_amount)
    {
        $this->discount_amount = $discount_amount;

        return $this;
    }

    /**
     * @return Invoice
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * @param Invoice $invoice
     * @return $this
     */
    public function setInvoice(Invoice $invoice)
    {
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * @return InvoiceItemStatus
     */
    public function getInvoiceItemStatus()
    {
        return $this->invoiceItemStatus;
    }

    /**
     * @param InvoiceItemStatus $invoiceItemStatus
     * @return InvoiceItem
     */
    public function setInvoiceItemStatus(InvoiceItemStatus $invoiceItemStatus)
    {
        $this->invoiceItemStatus = $invoiceItemStatus;

        return $this;
    }

    public function changeInvoiceItemStatus($machineName)
    {
        return "";
    }
}
