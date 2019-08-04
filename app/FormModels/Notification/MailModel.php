<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/20/2019
 * Time: 10:57 AM
 */

namespace App\FormModels\Notification;


class MailModel
{
    private $mailId;
    private $mailFrom;
    private $mailToPersonId;
    private $mailToPersonFirstName;
    private $mailToPersonLastName;
    private $mailToPersonEmail;
    private $mailSubject;
    private $mailContent;
    private $mailSendDate;
    private $mailCategory;

    /**
     * @return mixed
     */
    public function getMailId()
    {
        return $this->mailId;
    }

    /**
     * @param mixed $mailId
     */
    public function setMailId($mailId): void
    {
        $this->mailId = $mailId;
    }

    /**
     * @return mixed
     */
    public function getMailFrom()
    {
        return $this->mailFrom;
    }

    /**
     * @param mixed $mailFrom
     */
    public function setMailFrom($mailFrom): void
    {
        $this->mailFrom = $mailFrom;
    }

    /**
     * @return mixed
     */
    public function getMailToPersonId()
    {
        return $this->mailToPersonId;
    }

    /**
     * @param mixed $mailToPersonId
     */
    public function setMailToPersonId($mailToPersonId): void
    {
        $this->mailToPersonId = $mailToPersonId;
    }

    /**
     * @return mixed
     */
    public function getMailToPersonFirstName()
    {
        return $this->mailToPersonFirstName;
    }

    /**
     * @param mixed $mailToPersonFirstName
     */
    public function setMailToPersonFirstName($mailToPersonFirstName): void
    {
        $this->mailToPersonFirstName = $mailToPersonFirstName;
    }

    /**
     * @return mixed
     */
    public function getMailToPersonLastName()
    {
        return $this->mailToPersonLastName;
    }

    /**
     * @param mixed $mailToPersonLastName
     */
    public function setMailToPersonLastName($mailToPersonLastName): void
    {
        $this->mailToPersonLastName = $mailToPersonLastName;
    }

    /**
     * @return mixed
     */
    public function getMailToPersonEmail()
    {
        return $this->mailToPersonEmail;
    }

    /**
     * @param mixed $mailToPersonEmail
     */
    public function setMailToPersonEmail($mailToPersonEmail): void
    {
        $this->mailToPersonEmail = $mailToPersonEmail;
    }

    /**
     * @return mixed
     */
    public function getMailSubject()
    {
        return $this->mailSubject;
    }

    /**
     * @param mixed $mailSubject
     */
    public function setMailSubject($mailSubject): void
    {
        $this->mailSubject = $mailSubject;
    }

    /**
     * @return mixed
     */
    public function getMailContent()
    {
        return $this->mailContent;
    }

    /**
     * @param mixed $mailContent
     */
    public function setMailContent($mailContent): void
    {
        $this->mailContent = $mailContent;
    }

    /**
     * @return mixed
     */
    public function getMailSendDate()
    {
        return $this->mailSendDate;
    }

    /**
     * @param mixed $mailSendDate
     */
    public function setMailSendDate($mailSendDate): void
    {
        $this->mailSendDate = $mailSendDate;
    }

    /**
     * @return mixed
     */
    public function getMailCategory()
    {
        return $this->mailCategory;
    }

    /**
     * @param mixed $mailCategory
     */
    public function setMailCategory($mailCategory): void
    {
        $this->mailCategory = $mailCategory;
    }
}