<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/15/2019
 * Time: 6:49 PM
 */

namespace Matican\FormModels\Accounting;


class GiftCardStatusModel
{
    private $giftCardStatusId;
    private $giftCardStatusName;
    private $giftCardStatusMachineName;
    private $giftCardStatusColor;
    private $giftCardId;

    /**
     * @return mixed
     */
    public function getGiftCardStatusId()
    {
        return $this->giftCardStatusId;
    }

    /**
     * @param mixed $giftCardStatusId
     */
    public function setGiftCardStatusId($giftCardStatusId): void
    {
        $this->giftCardStatusId = $giftCardStatusId;
    }

    /**
     * @return mixed
     */
    public function getGiftCardStatusName()
    {
        return $this->giftCardStatusName;
    }

    /**
     * @param mixed $giftCardStatusName
     */
    public function setGiftCardStatusName($giftCardStatusName): void
    {
        $this->giftCardStatusName = $giftCardStatusName;
    }

    /**
     * @return mixed
     */
    public function getGiftCardStatusMachineName()
    {
        return $this->giftCardStatusMachineName;
    }

    /**
     * @param mixed $giftCardStatusMachineName
     */
    public function setGiftCardStatusMachineName($giftCardStatusMachineName): void
    {
        $this->giftCardStatusMachineName = $giftCardStatusMachineName;
    }

    /**
     * @return mixed
     */
    public function getGiftCardStatusColor()
    {
        return $this->giftCardStatusColor;
    }

    /**
     * @param mixed $giftCardStatusColor
     */
    public function setGiftCardStatusColor($giftCardStatusColor): void
    {
        $this->giftCardStatusColor = $giftCardStatusColor;
    }

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
}