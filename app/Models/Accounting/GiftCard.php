<?php

namespace App\Models\Accounting;

use App\Core\Concepts\CRUDActions;
use App\Models\Repository\Person;
use App\Core\DataTypes\Money;
use App\Core\DataTypes\Serial;

class GiftCard extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param Serial
     */
    private $serial;

    /**
     * @param Money
     */
    private $amount;

    /**
     * @param Person
     */
    private $owner;

    /**
     * @param GiftCardGroup
     */
    private $giftCardGroup;

    /**
     * @param GiftCardStatus
     */
    private $giftCardStatus;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Serial
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * @param Serial $serial
     * @return $this
     */
    public function setSerial(Serial $serial)
    {
        $this->serial = $serial;

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
     * @return Person
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param Person $owner
     * @return GiftCard
     */
    public function setOwner(Person $owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * @return GiftCardGroup
     */
    public function getGiftCardGroup()
    {
        return $this->giftCardGroup;
    }

    /**
     * @param GiftCardGroup $giftCardGroup
     * @return GiftCard
     */
    public function setGiftCardGroup(GiftCardGroup $giftCardGroup)
    {
        $this->giftCardGroup = $giftCardGroup;

        return $this;
    }

    /**
     * @return GiftCardStatus
     */
    public function getGiftCardStatus()
    {
        return $this->giftCardStatus;
    }

    /**
     * @param GiftCardStatus $giftCardStatus
     * @return GiftCard
     */
    public function setGiftCardStatus(GiftCardStatus $giftCardStatus)
    {
        $this->giftCardStatus = $giftCardStatus;

        return $this;
    }

    public function changeGiftCardStatus($machineName)
    {
        return "";
    }
}
