<?php

namespace App\Models\Accounting;

use App\Core\Concepts\CRUDActions;
use App\Models\Repository\Company;
use App\Models\Repository\Person;
use App\Core\DataTypes\DateTime;
use App\Core\DataTypes\FollowToken;
use App\Core\DataTypes\Money;


class Payment extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param DateTime
     */
    private $create_date;

    /**
     * @param DateTime
     */
    private $due_date;

    /**
     * @param DateTime
     */
    private $paid_date;

    /**
     * @param Money
     */
    private $amount;

    /**
     * @param FollowToken
     */
    private $follow_token;

    /**
     * @param Person
     */
    private $from_user;

    /**
     * @param Person
     */
    private $to_user;

    /**
     * @param Company
     */
    private $from_company;

    /**
     * @param Company
     */
    private $to_company;

    /**
     * @param PaymentMethod
     */
    private $paymentMethod;

    /**
     * @param PaymentRequest
     */
    private $paymentRequest;

    /**
     * @param PaymentStatus
     */
    private $paymentStatus;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return DateTime
     */
    public function getCreateDate()
    {
        return $this->create_date;
    }

    /**
     * @param DateTime $create_date
     * @return Payment
     */
    public function setCreateDate(DateTime $create_date)
    {
        $this->create_date = $create_date;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDueDate()
    {
        return $this->due_date;
    }

    /**
     * @param DateTime $due_date
     * @return Payment
     */
    public function setDueDate(DateTime $due_date)
    {
        $this->due_date = $due_date;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getPaidDate()
    {
        return $this->paid_date;
    }

    /**
     * @param DateTime $paid_date
     * @return Payment
     */
    public function setPaidDate(DateTime $paid_date)
    {
        $this->paid_date = $paid_date;

        return $this;
    }

    /**
     * @return Money
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param Money $amount
     * @return Payment
     */
    public function setAmount(Money $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return FollowToken
     */
    public function getFollowToken()
    {
        return $this->follow_token;
    }

    /**
     * @param FollowToken $follow_token
     * @return Payment
     */
    public function setFollowToken(FollowToken $follow_token)
    {
        $this->follow_token = $follow_token;

        return $this;
    }

    /**
     * @return Person
     */
    public function getFromUser()
    {
        return $this->from_user;
    }

    /**
     * @param Person $from_user
     * @return Payment
     */
    public function setFromUser(Person $from_user)
    {
        $this->from_user = $from_user;

        return $this;
    }

    /**
     * @return Person
     */
    public function getToUser()
    {
        return $this->to_user;
    }

    /**
     * @param Person $to_user
     * @return Payment
     */
    public function setToUser(Person $to_user)
    {
        $this->to_user = $to_user;

        return $this;
    }

    /**
     * @return Company
     */
    public function getFromCompany()
    {
        return $this->from_company;
    }

    /**
     * @param Company $from_company
     * @return Payment
     */
    public function setFromCompany(Company $from_company)
    {
        $this->from_company = $from_company;

        return $this;
    }

    /**
     * @return Company
     */
    public function getToCompany()
    {
        return $this->to_company;
    }

    /**
     * @param Company $to_company
     * @return Payment
     */
    public function setToCompany(Company $to_company)
    {
        $this->to_company = $to_company;

        return $this;
    }

    /**
     * @return PaymentMethod
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * @param PaymentMethod $paymentMethod
     * @return Payment
     */
    public function setPaymentMethod(PaymentMethod $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * @return PaymentRequest
     */
    public function getPaymentRequest()
    {
        return $this->paymentRequest;
    }

    /**
     * @param PaymentRequest $paymentRequest
     * @return Payment
     */
    public function setPaymentRequest(PaymentRequest $paymentRequest)
    {
        $this->paymentRequest = $paymentRequest;

        return $this;
    }

    /**
     * @return PaymentStatus
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }

    /**
     * @param PaymentStatus $paymentStatus
     * @return Payment
     */
    public function setPaymentStatus(PaymentStatus $paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;

        return $this;
    }

    public function changePaymentStatus($machineName)
    {
        return "";
    }
}
