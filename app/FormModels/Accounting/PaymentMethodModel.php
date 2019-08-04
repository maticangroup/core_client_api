<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/17/2019
 * Time: 11:23 AM
 */

namespace Matican\FormModels\Accounting;


class PaymentMethodModel
{
    private $paymentMethodId;
    private $paymentMethodName;
    private $paymentMethodMachineName;
    private $paymentId;
    private $paymentRequestId;

    /**
     * @return mixed
     */
    public function getPaymentMethodId()
    {
        return $this->paymentMethodId;
    }

    /**
     * @param mixed $paymentMethodId
     */
    public function setPaymentMethodId($paymentMethodId): void
    {
        $this->paymentMethodId = $paymentMethodId;
    }

    /**
     * @return mixed
     */
    public function getPaymentMethodName()
    {
        return $this->paymentMethodName;
    }

    /**
     * @param mixed $paymentMethodName
     */
    public function setPaymentMethodName($paymentMethodName): void
    {
        $this->paymentMethodName = $paymentMethodName;
    }

    /**
     * @return mixed
     */
    public function getPaymentMethodMachineName()
    {
        return $this->paymentMethodMachineName;
    }

    /**
     * @param mixed $paymentMethodMachineName
     */
    public function setPaymentMethodMachineName($paymentMethodMachineName): void
    {
        $this->paymentMethodMachineName = $paymentMethodMachineName;
    }

    /**
     * @return mixed
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }

    /**
     * @param mixed $paymentId
     */
    public function setPaymentId($paymentId): void
    {
        $this->paymentId = $paymentId;
    }

    /**
     * @return mixed
     */
    public function getPaymentRequestId()
    {
        return $this->paymentRequestId;
    }

    /**
     * @param mixed $paymentRequestId
     */
    public function setPaymentRequestId($paymentRequestId): void
    {
        $this->paymentRequestId = $paymentRequestId;
    }
}