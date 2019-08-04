<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/10/2019
 * Time: 10:28 AM
 */

namespace Matican\FormModels\Sale;


class OrderStatusModel
{
    private $orderStatusId;
    private $orderStatusName;
    private $orderStatusMachineName;
    private $orderStatusColor;
    private $orderId;

    /**
     * @return mixed
     */
    public function getOrderStatusId()
    {
        return $this->orderStatusId;
    }

    /**
     * @param mixed $orderStatusId
     */
    public function setOrderStatusId($orderStatusId): void
    {
        $this->orderStatusId = $orderStatusId;
    }

    /**
     * @return mixed
     */
    public function getOrderStatusName()
    {
        return $this->orderStatusName;
    }

    /**
     * @param mixed $orderStatusName
     */
    public function setOrderStatusName($orderStatusName): void
    {
        $this->orderStatusName = $orderStatusName;
    }

    /**
     * @return mixed
     */
    public function getOrderStatusMachineName()
    {
        return $this->orderStatusMachineName;
    }

    /**
     * @param mixed $orderStatusMachineName
     */
    public function setOrderStatusMachineName($orderStatusMachineName): void
    {
        $this->orderStatusMachineName = $orderStatusMachineName;
    }

    /**
     * @return mixed
     */
    public function getOrderStatusColor()
    {
        return $this->orderStatusColor;
    }

    /**
     * @param mixed $orderStatusColor
     */
    public function setOrderStatusColor($orderStatusColor): void
    {
        $this->orderStatusColor = $orderStatusColor;
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
}