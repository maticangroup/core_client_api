<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/10/2019
 * Time: 10:20 AM
 */

namespace Matican\FormModels\Sale;


class OrderModel
{
    private $orderId;
    private $orderSerial;
    private $orderName;
    private $orderCreateDate;
    private $orderCreatePerson;
    private $orderConfirmDate;
    private $orderConfirmPerson;
    private $orderOwner;
    private $orderOwnerId;
    private $orderOwnerName;
    private $orderOwnerAddress;
    private $orderOwnerPhone;
    private $orderInvoiceSerial;
    private $orderInvoiceCreateDate;
    private $orderDescription;
    private $orderTotalPrice;
    private $orderVatPrice;
    private $orderProducts;
    private $orderPaymentRequestId;
    private $orderStatus;

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
    public function getOrderSerial()
    {
        return $this->orderSerial;
    }

    /**
     * @param mixed $orderSerial
     */
    public function setOrderSerial($orderSerial): void
    {
        $this->orderSerial = $orderSerial;
    }

    /**
     * @return mixed
     */
    public function getOrderName()
    {
        return $this->orderName;
    }

    /**
     * @param mixed $orderName
     */
    public function setOrderName($orderName): void
    {
        $this->orderName = $orderName;
    }

    /**
     * @return mixed
     */
    public function getOrderCreateDate()
    {
        return $this->orderCreateDate;
    }

    /**
     * @param mixed $orderCreateDate
     */
    public function setOrderCreateDate($orderCreateDate): void
    {
        $this->orderCreateDate = $orderCreateDate;
    }

    /**
     * @return mixed
     */
    public function getOrderCreatePerson()
    {
        return $this->orderCreatePerson;
    }

    /**
     * @param mixed $orderCreatePerson
     */
    public function setOrderCreatePerson($orderCreatePerson): void
    {
        $this->orderCreatePerson = $orderCreatePerson;
    }

    /**
     * @return mixed
     */
    public function getOrderConfirmDate()
    {
        return $this->orderConfirmDate;
    }

    /**
     * @param mixed $orderConfirmDate
     */
    public function setOrderConfirmDate($orderConfirmDate): void
    {
        $this->orderConfirmDate = $orderConfirmDate;
    }

    /**
     * @return mixed
     */
    public function getOrderConfirmPerson()
    {
        return $this->orderConfirmPerson;
    }

    /**
     * @param mixed $orderConfirmPerson
     */
    public function setOrderConfirmPerson($orderConfirmPerson): void
    {
        $this->orderConfirmPerson = $orderConfirmPerson;
    }

    /**
     * @return mixed
     */
    public function getOrderOwner()
    {
        return $this->orderOwner;
    }

    /**
     * @param mixed $orderOwner
     */
    public function setOrderOwner($orderOwner): void
    {
        $this->orderOwner = $orderOwner;
    }

    /**
     * @return mixed
     */
    public function getOrderOwnerId()
    {
        return $this->orderOwnerId;
    }

    /**
     * @param mixed $orderOwnerId
     */
    public function setOrderOwnerId($orderOwnerId): void
    {
        $this->orderOwnerId = $orderOwnerId;
    }

    /**
     * @return mixed
     */
    public function getOrderOwnerName()
    {
        return $this->orderOwnerName;
    }

    /**
     * @param mixed $orderOwnerName
     */
    public function setOrderOwnerName($orderOwnerName): void
    {
        $this->orderOwnerName = $orderOwnerName;
    }

    /**
     * @return mixed
     */
    public function getOrderOwnerAddress()
    {
        return $this->orderOwnerAddress;
    }

    /**
     * @param mixed $orderOwnerAddress
     */
    public function setOrderOwnerAddress($orderOwnerAddress): void
    {
        $this->orderOwnerAddress = $orderOwnerAddress;
    }

    /**
     * @return mixed
     */
    public function getOrderOwnerPhone()
    {
        return $this->orderOwnerPhone;
    }

    /**
     * @param mixed $orderOwnerPhone
     */
    public function setOrderOwnerPhone($orderOwnerPhone): void
    {
        $this->orderOwnerPhone = $orderOwnerPhone;
    }

    /**
     * @return mixed
     */
    public function getOrderInvoiceSerial()
    {
        return $this->orderInvoiceSerial;
    }

    /**
     * @param mixed $orderInvoiceSerial
     */
    public function setOrderInvoiceSerial($orderInvoiceSerial): void
    {
        $this->orderInvoiceSerial = $orderInvoiceSerial;
    }

    /**
     * @return mixed
     */
    public function getOrderInvoiceCreateDate()
    {
        return $this->orderInvoiceCreateDate;
    }

    /**
     * @param mixed $orderInvoiceCreateDate
     */
    public function setOrderInvoiceCreateDate($orderInvoiceCreateDate): void
    {
        $this->orderInvoiceCreateDate = $orderInvoiceCreateDate;
    }

    /**
     * @return mixed
     */
    public function getOrderDescription()
    {
        return $this->orderDescription;
    }

    /**
     * @param mixed $orderDescription
     */
    public function setOrderDescription($orderDescription): void
    {
        $this->orderDescription = $orderDescription;
    }

    /**
     * @return mixed
     */
    public function getOrderTotalPrice()
    {
        return $this->orderTotalPrice;
    }

    /**
     * @param mixed $orderTotalPrice
     */
    public function setOrderTotalPrice($orderTotalPrice): void
    {
        $this->orderTotalPrice = $orderTotalPrice;
    }

    /**
     * @return mixed
     */
    public function getOrderVatPrice()
    {
        return $this->orderVatPrice;
    }

    /**
     * @param mixed $orderVatPrice
     */
    public function setOrderVatPrice($orderVatPrice): void
    {
        $this->orderVatPrice = $orderVatPrice;
    }

    /**
     * @return mixed
     */
    public function getOrderProducts()
    {
        return $this->orderProducts;
    }

    /**
     * @param mixed $orderProducts
     */
    public function setOrderProducts($orderProducts): void
    {
        $this->orderProducts = $orderProducts;
    }

    /**
     * @return mixed
     */
    public function getOrderPaymentRequestId()
    {
        return $this->orderPaymentRequestId;
    }

    /**
     * @param mixed $orderPaymentRequestId
     */
    public function setOrderPaymentRequestId($orderPaymentRequestId): void
    {
        $this->orderPaymentRequestId = $orderPaymentRequestId;
    }

    /**
     * @return mixed
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * @param mixed $orderStatus
     */
    public function setOrderStatus($orderStatus): void
    {
        $this->orderStatus = $orderStatus;
    }

}