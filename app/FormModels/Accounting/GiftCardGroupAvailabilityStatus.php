<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/17/2019
 * Time: 6:19 PM
 */

namespace Matican\FormModels\Accounting;


class GiftCardGroupAvailabilityStatus
{
    private $giftCardGroupAvailabilityId;
    private $giftCardGroupAvailabilityName;
    private $giftCardGroupAvailabilityMachineName;
    private $giftCardGroupAvailabilityColor;
    private $giftCardGroupId;

    /**
     * @return mixed
     */
    public function getGiftCardGroupAvailabilityId()
    {
        return $this->giftCardGroupAvailabilityId;
    }

    /**
     * @param mixed $giftCardGroupAvailabilityId
     */
    public function setGiftCardGroupAvailabilityId($giftCardGroupAvailabilityId): void
    {
        $this->giftCardGroupAvailabilityId = $giftCardGroupAvailabilityId;
    }

    /**
     * @return mixed
     */
    public function getGiftCardGroupAvailabilityName()
    {
        return $this->giftCardGroupAvailabilityName;
    }

    /**
     * @param mixed $giftCardGroupAvailabilityName
     */
    public function setGiftCardGroupAvailabilityName($giftCardGroupAvailabilityName): void
    {
        $this->giftCardGroupAvailabilityName = $giftCardGroupAvailabilityName;
    }

    /**
     * @return mixed
     */
    public function getGiftCardGroupAvailabilityMachineName()
    {
        return $this->giftCardGroupAvailabilityMachineName;
    }

    /**
     * @param mixed $giftCardGroupAvailabilityMachineName
     */
    public function setGiftCardGroupAvailabilityMachineName($giftCardGroupAvailabilityMachineName): void
    {
        $this->giftCardGroupAvailabilityMachineName = $giftCardGroupAvailabilityMachineName;
    }

    /**
     * @return mixed
     */
    public function getGiftCardGroupAvailabilityColor()
    {
        return $this->giftCardGroupAvailabilityColor;
    }

    /**
     * @param mixed $giftCardGroupAvailabilityColor
     */
    public function setGiftCardGroupAvailabilityColor($giftCardGroupAvailabilityColor): void
    {
        $this->giftCardGroupAvailabilityColor = $giftCardGroupAvailabilityColor;
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