<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/19/2019
 * Time: 6:24 PM
 */

namespace App\FormModels\CRM;


class InvitationModel
{
    private $invitationId;
    private $invitationDate;
    private $invitedPersonFirstName;
    private $invitedPersonLastName;
    private $invitedPersonMobile;
    private $invitatorPersonId;
    private $invitatorPersonFirstName;
    private $invitatorPersonLastName;
    private $invitatorPersonMobile;
    private $invitatorDiscountCodeSerial;
    private $invitatorDiscountCodeExpiryDate;
    private $invitatorDiscountCodeStatus;

    /**
     * @return mixed
     */
    public function getInvitationId()
    {
        return $this->invitationId;
    }

    /**
     * @param mixed $invitationId
     */
    public function setInvitationId($invitationId): void
    {
        $this->invitationId = $invitationId;
    }

    /**
     * @return mixed
     */
    public function getInvitationDate()
    {
        return $this->invitationDate;
    }

    /**
     * @param mixed $invitationDate
     */
    public function setInvitationDate($invitationDate): void
    {
        $this->invitationDate = $invitationDate;
    }

    /**
     * @return mixed
     */
    public function getInvitedPersonFirstName()
    {
        return $this->invitedPersonFirstName;
    }

    /**
     * @param mixed $invitedPersonFirstName
     */
    public function setInvitedPersonFirstName($invitedPersonFirstName): void
    {
        $this->invitedPersonFirstName = $invitedPersonFirstName;
    }

    /**
     * @return mixed
     */
    public function getInvitedPersonLastName()
    {
        return $this->invitedPersonLastName;
    }

    /**
     * @param mixed $invitedPersonLastName
     */
    public function setInvitedPersonLastName($invitedPersonLastName): void
    {
        $this->invitedPersonLastName = $invitedPersonLastName;
    }

    /**
     * @return mixed
     */
    public function getInvitedPersonMobile()
    {
        return $this->invitedPersonMobile;
    }

    /**
     * @param mixed $invitedPersonMobile
     */
    public function setInvitedPersonMobile($invitedPersonMobile): void
    {
        $this->invitedPersonMobile = $invitedPersonMobile;
    }

    /**
     * @return mixed
     */
    public function getInvitatorPersonId()
    {
        return $this->invitatorPersonId;
    }

    /**
     * @param mixed $invitatorPersonId
     */
    public function setInvitatorPersonId($invitatorPersonId): void
    {
        $this->invitatorPersonId = $invitatorPersonId;
    }

    /**
     * @return mixed
     */
    public function getInvitatorPersonFirstName()
    {
        return $this->invitatorPersonFirstName;
    }

    /**
     * @param mixed $invitatorPersonFirstName
     */
    public function setInvitatorPersonFirstName($invitatorPersonFirstName): void
    {
        $this->invitatorPersonFirstName = $invitatorPersonFirstName;
    }

    /**
     * @return mixed
     */
    public function getInvitatorPersonLastName()
    {
        return $this->invitatorPersonLastName;
    }

    /**
     * @param mixed $invitatorPersonLastName
     */
    public function setInvitatorPersonLastName($invitatorPersonLastName): void
    {
        $this->invitatorPersonLastName = $invitatorPersonLastName;
    }

    /**
     * @return mixed
     */
    public function getInvitatorPersonMobile()
    {
        return $this->invitatorPersonMobile;
    }

    /**
     * @param mixed $invitatorPersonMobile
     */
    public function setInvitatorPersonMobile($invitatorPersonMobile): void
    {
        $this->invitatorPersonMobile = $invitatorPersonMobile;
    }

    /**
     * @return mixed
     */
    public function getInvitatorDiscountCodeSerial()
    {
        return $this->invitatorDiscountCodeSerial;
    }

    /**
     * @param mixed $invitatorDiscountCodeSerial
     */
    public function setInvitatorDiscountCodeSerial($invitatorDiscountCodeSerial): void
    {
        $this->invitatorDiscountCodeSerial = $invitatorDiscountCodeSerial;
    }

    /**
     * @return mixed
     */
    public function getInvitatorDiscountCodeExpiryDate()
    {
        return $this->invitatorDiscountCodeExpiryDate;
    }

    /**
     * @param mixed $invitatorDiscountCodeExpiryDate
     */
    public function setInvitatorDiscountCodeExpiryDate($invitatorDiscountCodeExpiryDate): void
    {
        $this->invitatorDiscountCodeExpiryDate = $invitatorDiscountCodeExpiryDate;
    }

    /**
     * @return mixed
     */
    public function getInvitatorDiscountCodeStatus()
    {
        return $this->invitatorDiscountCodeStatus;
    }

    /**
     * @param mixed $invitatorDiscountCodeStatus
     */
    public function setInvitatorDiscountCodeStatus($invitatorDiscountCodeStatus): void
    {
        $this->invitatorDiscountCodeStatus = $invitatorDiscountCodeStatus;
    }
}