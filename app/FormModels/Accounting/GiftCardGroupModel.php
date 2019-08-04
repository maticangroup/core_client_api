<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/15/2019
 * Time: 6:36 PM
 */

namespace Matican\FormModels\Accounting;


class GiftCardGroupModel
{
    private $giftCardGroupId;
    private $giftCardGroupName;
    private $giftCardGroupPrefix;
    private $giftCardGroupExpiryDate;
    private $giftCardGroupCount;
    private $giftCardGroupAmount;
    private $giftCardGroupLeftCount;
    private $giftCardGroupCreatePerson;
    private $giftCardGroupCreateDate;
    private $giftCardGroupConfirmPerson;
    private $giftCardGroupConfirmDate;
    private $giftCardGroupStatus;
    private $giftCardGroupAvailabilityStatus;
    private $giftCards;

    /**
     * @return mixed
     */
    public function getGiftCardGroupId()
    {
        return $this->giftCardGroupId;
    }

    /**
     * @param mixed $giftCardGroupId
     */
    public function setGiftCardGroupId($giftCardGroupId): void
    {
        $this->giftCardGroupId = $giftCardGroupId;
    }

    /**
     * @return mixed
     */
    public function getGiftCardGroupName()
    {
        return $this->giftCardGroupName;
    }

    /**
     * @param mixed $giftCardGroupName
     */
    public function setGiftCardGroupName($giftCardGroupName): void
    {
        $this->giftCardGroupName = $giftCardGroupName;
    }

    /**
     * @return mixed
     */
    public function getGiftCardGroupPrefix()
    {
        return $this->giftCardGroupPrefix;
    }

    /**
     * @param mixed $giftCardGroupPrefix
     */
    public function setGiftCardGroupPrefix($giftCardGroupPrefix): void
    {
        $this->giftCardGroupPrefix = $giftCardGroupPrefix;
    }

    /**
     * @return mixed
     */
    public function getGiftCardGroupExpiryDate()
    {
        return $this->giftCardGroupExpiryDate;
    }

    /**
     * @param mixed $giftCardGroupExpiryDate
     */
    public function setGiftCardGroupExpiryDate($giftCardGroupExpiryDate): void
    {
        $this->giftCardGroupExpiryDate = $giftCardGroupExpiryDate;
    }

    /**
     * @return mixed
     */
    public function getGiftCardGroupCount()
    {
        return $this->giftCardGroupCount;
    }

    /**
     * @param mixed $giftCardGroupCount
     */
    public function setGiftCardGroupCount($giftCardGroupCount): void
    {
        $this->giftCardGroupCount = $giftCardGroupCount;
    }

    /**
     * @return mixed
     */
    public function getGiftCardGroupAmount()
    {
        return $this->giftCardGroupAmount;
    }

    /**
     * @param mixed $giftCardGroupAmount
     */
    public function setGiftCardGroupAmount($giftCardGroupAmount): void
    {
        $this->giftCardGroupAmount = $giftCardGroupAmount;
    }

    /**
     * @return mixed
     */
    public function getGiftCardGroupLeftCount()
    {
        return $this->giftCardGroupLeftCount;
    }

    /**
     * @param mixed $giftCardGroupLeftCount
     */
    public function setGiftCardGroupLeftCount($giftCardGroupLeftCount): void
    {
        $this->giftCardGroupLeftCount = $giftCardGroupLeftCount;
    }

    /**
     * @return mixed
     */
    public function getGiftCardGroupCreatePerson()
    {
        return $this->giftCardGroupCreatePerson;
    }

    /**
     * @param mixed $giftCardGroupCreatePerson
     */
    public function setGiftCardGroupCreatePerson($giftCardGroupCreatePerson): void
    {
        $this->giftCardGroupCreatePerson = $giftCardGroupCreatePerson;
    }

    /**
     * @return mixed
     */
    public function getGiftCardGroupCreateDate()
    {
        return $this->giftCardGroupCreateDate;
    }

    /**
     * @param mixed $giftCardGroupCreateDate
     */
    public function setGiftCardGroupCreateDate($giftCardGroupCreateDate): void
    {
        $this->giftCardGroupCreateDate = $giftCardGroupCreateDate;
    }

    /**
     * @return mixed
     */
    public function getGiftCardGroupConfirmPerson()
    {
        return $this->giftCardGroupConfirmPerson;
    }

    /**
     * @param mixed $giftCardGroupConfirmPerson
     */
    public function setGiftCardGroupConfirmPerson($giftCardGroupConfirmPerson): void
    {
        $this->giftCardGroupConfirmPerson = $giftCardGroupConfirmPerson;
    }

    /**
     * @return mixed
     */
    public function getGiftCardGroupConfirmDate()
    {
        return $this->giftCardGroupConfirmDate;
    }

    /**
     * @param mixed $giftCardGroupConfirmDate
     */
    public function setGiftCardGroupConfirmDate($giftCardGroupConfirmDate): void
    {
        $this->giftCardGroupConfirmDate = $giftCardGroupConfirmDate;
    }

    /**
     * @return mixed
     */
    public function getGiftCardGroupStatus()
    {
        return $this->giftCardGroupStatus;
    }

    /**
     * @param mixed $giftCardGroupStatus
     */
    public function setGiftCardGroupStatus($giftCardGroupStatus): void
    {
        $this->giftCardGroupStatus = $giftCardGroupStatus;
    }

    /**
     * @return mixed
     */
    public function getGiftCards()
    {
        return $this->giftCards;
    }

    /**
     * @param mixed $giftCards
     */
    public function setGiftCards($giftCards): void
    {
        $this->giftCards = $giftCards;
    }

    /**
     * @return mixed
     */
    public function getGiftCardGroupAvailabilityStatus()
    {
        return $this->giftCardGroupAvailabilityStatus;
    }

    /**
     * @param mixed $giftCardGroupAvailabilityStatus
     */
    public function setGiftCardGroupAvailabilityStatus($giftCardGroupAvailabilityStatus): void
    {
        $this->giftCardGroupAvailabilityStatus = $giftCardGroupAvailabilityStatus;
    }

}