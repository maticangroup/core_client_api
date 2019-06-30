<?php

namespace Matican\Models\Accounting;


use Matican\Core\Concepts\CRUDActions;
use Matican\Core\DataTypes\MachineName;

class PaymentMethod extends CRUDActions
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
     * @param MachineName
     */
    private $machine_name;

    /**
     * @param Payment
     */
//    private $payments;

    /**
     * @param PaymentMethodStatus
     */
    private $paymentMethodStatus;

    public function __construct()
    {
//        $this->payments = [];
    }

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
     * @return PaymentMethod
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return MachineName
     */
    public function getMachineName()
    {
        return $this->machine_name;
    }

    /**
     * @param MachineName $machine_name
     * @return PaymentMethod
     */
    public function setMachineName(MachineName $machine_name)
    {
        $this->machine_name = $machine_name;

        return $this;
    }


    public function getPayments()
    {
//        return $this->payments;
    }

    /**
     * @return PaymentMethodStatus
     */
    public function getPaymentMethodStatus()
    {
        return $this->paymentMethodStatus;
    }

    /**
     * @param PaymentMethodStatus $paymentMethodStatus
     * @return PaymentMethod
     */
    public function setPaymentMethodStatus(PaymentMethodStatus $paymentMethodStatus)
    {
        $this->paymentMethodStatus = $paymentMethodStatus;

        return $this;
    }

    public function changePaymentMethodStatus($machineName)
    {
        return "";
    }
}
