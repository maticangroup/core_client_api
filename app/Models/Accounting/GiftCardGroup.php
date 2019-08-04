<?php

namespace Matican\Models\Accounting;

use Matican\Core\Concepts\CRUDActions;
use Matican\Models\Repository\Person;
use Matican\Core\DataTypes\CouponPrefix;
use Matican\Core\DataTypes\DateTime;
use Matican\Core\DataTypes\Money;


class GiftCardGroup extends CRUDActions
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
     * @param integer
     */
    private $count;

    /**
     * @param Money
     */
    private $amount;

    /**
     * @param DateTime
     */
    private $create_date;

    /**
     * @param Person
     */
    private $creator;

    /**
     * @param Person
     */
    private $confirmed_by;

    /**
     * @param CouponPrefix
     */
    private $prefix;

    /**
     * @param GiftCard
     */
//    private $gift_cards;

    /**
     * @param DateTime
     */
    private $expiry_date;

    /**
     * @param GiftCardGroupStatus
     */
    private $giftCardGroupStatus;

    public function __construct()
    {
//        $this->gift_cards = [];
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
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param integer $count
     * @return $this
     */
    public function setCount($count)
    {
        $this->count = $count;

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
     * @return $this
     */
    public function setAmount(Money $amount)
    {
        $this->amount = $amount;

        return $this;
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
     * @return $this
     */
    public function setCreateDate(DateTime $create_date)
    {
        $this->create_date = $create_date;

        return $this;
    }

    /**
     * @return Person
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * @param Person $creator
     * @return $this
     */
    public function setCreator(Person $creator)
    {
        $this->creator = $creator;

        return $this;
    }

    /**
     * @return Person
     */
    public function getConfirmedBy()
    {
        return $this->confirmed_by;
    }

    /**
     * @param Person $confirmed_by
     */
    public function setConfirmedBy(Person $confirmed_by)
    {
        $this->confirmed_by = $confirmed_by;
    }


    /**
     * @return CouponPrefix
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * @param CouponPrefix $prefix
     * @return $this
     */
    public function setPrefix(CouponPrefix $prefix)
    {
        $this->prefix = $prefix;

        return $this;
    }

    /**
     * @return GiftCard[]
     */
    public function getGiftCards()
    {
//        return $this->gift_cards;
    }


    /**
     * @return DateTime
     */
    public function getExpiryDate()
    {
        return $this->expiry_date;
    }

    /**
     * @param DateTime $expiry_date
     * @return $this
     */
    public function setExpiryDate(DateTime $expiry_date)
    {
        $this->expiry_date = $expiry_date;

        return $this;
    }

    /**
     * @return GiftCardStatus
     */
    public function getGiftCardGroupStatus()
    {
        return $this->giftCardGroupStatus;
    }

    /**
     * @param GiftCardStatus $giftCardGroupStatus
     * @return $this
     */
    public function setGiftCardGroupStatus(GiftCardStatus $giftCardGroupStatus)
    {
        $this->giftCardGroupStatus = $giftCardGroupStatus;

        return $this;
    }

    public function changeGiftCardGroupStatus($machineName)
    {
        return "";
    }

    public function confirm($userId)
    {
        return "";
    }
}
