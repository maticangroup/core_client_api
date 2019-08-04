<?php

namespace Matican\Models\Accounting;

use Matican\Core\Concepts\CRUDActions;
use Matican\Models\Repository\Person;
use Matican\Core\DataTypes\DateTime;
use Matican\Core\DataTypes\Money;
use Matican\Core\DataTypes\Text;


class UserCreditDeed extends CRUDActions
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
     * @param Text
     */
    private $description;

    /**
     * @param Money
     */
    private $amount;

    /**
     * @param Person
     */
    private $from_user;

    /**
     * @param Person
     */
    private $to_user;

    /**
     * @param UserCreditDeedType
     */
    private $userCreditDeedType;

    /**
     * @param GiftCard
     */
    private $from_giftcard;

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
     * @return UserCreditDeed
     */
    public function setCreateDate(DateTime $create_date)
    {
        $this->create_date = $create_date;

        return $this;
    }

    /**
     * @return Text
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param Text $description
     * @return $this
     */
    public function setDescription(Text $description)
    {
        $this->description = $description;

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
     * @return UserCreditDeed
     */
    public function setAmount(Money $amount)
    {
        $this->amount = $amount;

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
     * @return UserCreditDeed
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
     * @return UserCreditDeed
     */
    public function setToUser(Person $to_user)
    {
        $this->to_user = $to_user;

        return $this;
    }

    /**
     * @return UserCreditDeedType
     */
    public function getUserCreditDeedType()
    {
        return $this->userCreditDeedType;
    }

    /**
     * @param UserCreditDeedType $userCreditDeedType
     * @return UserCreditDeed
     */
    public function setUserCreditDeedType(UserCreditDeedType $userCreditDeedType)
    {
        $this->userCreditDeedType = $userCreditDeedType;

        return $this;
    }

    /**
     * @return GiftCard
     */
    public function getFromGiftcard()
    {
        return $this->from_giftcard;
    }

    /**
     * @param GiftCard $from_giftcard
     */
    public function setFromGiftcard(GiftCard $from_giftcard)
    {
        $this->from_giftcard = $from_giftcard;
    }

    public function changeUserCreditDeedType($machineName)
    {
        return "";
    }
}
