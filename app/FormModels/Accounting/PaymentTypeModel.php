<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/14/2019
 * Time: 1:10 PM
 */

namespace Matican\FormModels\Accounting;


class PaymentTypeModel
{
    private $paymentTypeId;
    private $paymentTypeName;
    private $paymentTypeMachineName;
    private $paymentId;

    /**
     * @return mixed
     */
    public function getPaymentTypeId()
    {
        return $this->paymentTypeId;
    }

    /**
     * @param mixed $paymentTypeId
     */
    public function setPaymentTypeId($paymentTypeId): void
    {
        $this->paymentTypeId = $paymentTypeId;
    }

    /**
     * @return mixed
     */
    public function getPaymentTypeName()
    {
        return $this->paymentTypeName;
    }

    /**
     * @param mixed $paymentTypeName
     */
    public function setPaymentTypeName($paymentTypeName): void
    {
        $this->paymentTypeName = $paymentTypeName;
    }

    /**
     * @return mixed
     */
    public function getPaymentTypeMachineName()
    {
        return $this->paymentTypeMachineName;
    }

    /**
     * @param mixed $paymentTypeMachineName
     */
    public function setPaymentTypeMachineName($paymentTypeMachineName): void
    {
        $this->paymentTypeMachineName = $paymentTypeMachineName;
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
}