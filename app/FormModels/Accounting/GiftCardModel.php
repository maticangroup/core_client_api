<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/15/2019
 * Time: 6:45 PM
 */

namespace Matican\FormModels\Accounting;


class GiftCardModel
{
    private $giftCardId;
    private $giftCardSerial;
    private $giftCardStatus;
    private $giftCardUsedPersonId;
    private $giftCardUsedPersonFirstName;
    private $giftCardUsedPersonLastName;
    private $giftCardUsedDate;
    private $giftCardGroupId;

    /**
     * @return mixed
     */
    public function getGiftCardId()
    {
        return $this->giftCardId;
    }

    /**
     * @param mixed $giftCardId
     */
    public function setGiftCardId($giftCardId): void
    {
        $this->giftCardId = $giftCardId;
    }

    /**
     * @return mixed
     */
    public function getGiftCardSerial()
    {
        return $this->giftCardSerial;
    }

    /**
     * @param mixed $giftCardSerial
     */
    public function setGiftCardSerial($giftCardSerial): void
    {
        $this->giftCardSerial = $giftCardSerial;
    }

    /**
     * @return mixed
     */
    public function getGiftCardStatus()
    {
        return $this->giftCardStatus;
    }

    /**
     * @param mixed $giftCardStatus
     */
    public function setGiftCardStatus($giftCardStatus): void
    {
        $this->giftCardStatus = $giftCardStatus;
    }

    /**
     * @return mixed
     */
    public function getGiftCardUsedPersonId()
    {
        return $this->giftCardUsedPersonId;
    }

    /**
     * @param mixed $giftCardUsedPersonId
     */
    public function setGiftCardUsedPersonId($giftCardUsedPersonId): void
    {
        $this->giftCardUsedPersonId = $giftCardUsedPersonId;
    }

    /**
     * @return mixed
     */
    public function getGiftCardUsedPersonFirstName()
    {
        return $this->giftCardUsedPersonFirstName;
    }

    /**
     * @param mixed $giftCardUsedPersonFirstName
     */
    public function setGiftCardUsedPersonFirstName($giftCardUsedPersonFirstName): void
    {
        $this->giftCardUsedPersonFirstName = $giftCardUsedPersonFirstName;
    }

    /**
     * @return mixed
     */
    public function getGiftCardUsedPersonLastName()
    {
        return $this->giftCardUsedPersonLastName;
    }

    /**
     * @param mixed $giftCardUsedPersonLastName
     */
    public function setGiftCardUsedPersonLastName($giftCardUsedPersonLastName): void
    {
        $this->giftCardUsedPersonLastName = $giftCardUsedPersonLastName;
    }

    /**
     * @return mixed
     */
    public function getGiftCardUsedDate()
    {
        return $this->giftCardUsedDate;
    }

    /**
     * @param mixed $giftCardUsedDate
     */
    public function setGiftCardUsedDate($giftCardUsedDate): void
    {
        $this->giftCardUsedDate = $giftCardUsedDate;
    }

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
}