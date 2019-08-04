<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/18/2019
 * Time: 5:52 PM
 */

namespace App\FormModels\Notification;


class SMSModel
{
    private $smsLogId;
    private $smsLogSubject;
    private $smsLogContent;
    private $smsLogSendDate;
    private $smsLogLength;
    private $smsLogFrom;
    private $smsLogToPersonPhone;
    private $smsLogToPersonFirstName;
    private $smsLogToPersonLastName;
    private $PersonId;

    /**
     * @return mixed
     */
    public function getSmsLogId()
    {
        return $this->smsLogId;
    }

    /**
     * @param mixed $smsLogId
     */
    public function setSmsLogId($smsLogId): void
    {
        $this->smsLogId = $smsLogId;
    }

    /**
     * @return mixed
     */
    public function getSmsLogSubject()
    {
        return $this->smsLogSubject;
    }

    /**
     * @param mixed $smsLogSubject
     */
    public function setSmsLogSubject($smsLogSubject): void
    {
        $this->smsLogSubject = $smsLogSubject;
    }

    /**
     * @return mixed
     */
    public function getSmsLogContent()
    {
        return $this->smsLogContent;
    }

    /**
     * @param mixed $smsLogContent
     */
    public function setSmsLogContent($smsLogContent): void
    {
        $this->smsLogContent = $smsLogContent;
    }

    /**
     * @return mixed
     */
    public function getSmsLogSendDate()
    {
        return $this->smsLogSendDate;
    }

    /**
     * @param mixed $smsLogSendDate
     */
    public function setSmsLogSendDate($smsLogSendDate): void
    {
        $this->smsLogSendDate = $smsLogSendDate;
    }

    /**
     * @return mixed
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }

    /**
     * @param mixed $PersonId
     */
    public function setPersonId($PersonId): void
    {
        $this->PersonId = $PersonId;
    }

    /**
     * @return mixed
     */
    public function getSmsLogLength()
    {
        return $this->smsLogLength;
    }

    /**
     * @param mixed $smsLogLength
     */
    public function setSmsLogLength($smsLogLength): void
    {
        $this->smsLogLength = $smsLogLength;
    }

    /**
     * @return mixed
     */
    public function getSmsLogFrom()
    {
        return $this->smsLogFrom;
    }

    /**
     * @param mixed $smsLogFrom
     */
    public function setSmsLogFrom($smsLogFrom): void
    {
        $this->smsLogFrom = $smsLogFrom;
    }

    /**
     * @return mixed
     */
    public function getSmsLogToPersonFirstName()
    {
        return $this->smsLogToPersonFirstName;
    }

    /**
     * @param mixed $smsLogToPersonFirstName
     */
    public function setSmsLogToPersonFirstName($smsLogToPersonFirstName): void
    {
        $this->smsLogToPersonFirstName = $smsLogToPersonFirstName;
    }

    /**
     * @return mixed
     */
    public function getSmsLogToPersonLastName()
    {
        return $this->smsLogToPersonLastName;
    }

    /**
     * @param mixed $smsLogToPersonLastName
     */
    public function setSmsLogToPersonLastName($smsLogToPersonLastName): void
    {
        $this->smsLogToPersonLastName = $smsLogToPersonLastName;
    }

    /**
     * @return mixed
     */
    public function getSmsLogToPersonPhone()
    {
        return $this->smsLogToPersonPhone;
    }

    /**
     * @param mixed $smsLogToPersonPhone
     */
    public function setSmsLogToPersonPhone($smsLogToPersonPhone): void
    {
        $this->smsLogToPersonPhone = $smsLogToPersonPhone;
    }
}