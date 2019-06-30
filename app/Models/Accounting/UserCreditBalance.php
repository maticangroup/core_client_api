<?php

namespace App\Models\Accounting;

use App\Core\Concepts\CRUDActions;
use App\Models\Repository\Person;
use App\Core\DataTypes\Money;


class UserCreditBalance extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param Person
     */
    private $credit_owner;

    /**
     * @param Money
     */
    private $credit;

    /**
     * @param UserCreditAccountStatus
     */
    private $account_status;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Person
     */
    public function getCreditOwner()
    {
        return $this->credit_owner;
    }

    /**
     * @param Person $credit_owner
     * @return UserCreditBalance
     */
    public function setCreditOwner(Person $credit_owner)
    {
        $this->credit_owner = $credit_owner;

        return $this;
    }

    /**
     * @return Money
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * @param Money $credit
     * @return UserCreditBalance
     */
//    public function setCredit(Money $credit)
//    {
//        $this->credit = $credit;
//
//        return $this;
//    }

    /**
     * @return UserCreditAccountStatus
     */
    public function getAccountStatus()
    {
        return $this->account_status;
    }

    /**
     * @param UserCreditAccountStatus $account_status
     * @return UserCreditBalance
     */
    public function setAccountStatus(UserCreditAccountStatus $account_status)
    {
        $this->account_status = $account_status;

        return $this;
    }

    public function changeUserCreditAccountStatus($machineName)
    {
        return "";
    }
}
