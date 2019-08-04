<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/22/2019
 * Time: 10:54 AM
 */

namespace Matican\FormModels\Notification;


class NewsletterModel
{
    private $newsletterId;
    private $newsletterTitle;
    private $newsletterContent;
    private $newsletterCreatePerson;
    private $newsletterCreateDate;
    private $newsletterStatus;
    private $newsletterEmails;

    /**
     * @return mixed
     */
    public function getNewsletterId()
    {
        return $this->newsletterId;
    }

    /**
     * @param mixed $newsletterId
     */
    public function setNewsletterId($newsletterId): void
    {
        $this->newsletterId = $newsletterId;
    }

    /**
     * @return mixed
     */
    public function getNewsletterTitle()
    {
        return $this->newsletterTitle;
    }

    /**
     * @param mixed $newsletterTitle
     */
    public function setNewsletterTitle($newsletterTitle): void
    {
        $this->newsletterTitle = $newsletterTitle;
    }

    /**
     * @return mixed
     */
    public function getNewsletterContent()
    {
        return $this->newsletterContent;
    }

    /**
     * @param mixed $newsletterContent
     */
    public function setNewsletterContent($newsletterContent): void
    {
        $this->newsletterContent = $newsletterContent;
    }

    /**
     * @return mixed
     */
    public function getNewsletterCreatePerson()
    {
        return $this->newsletterCreatePerson;
    }

    /**
     * @param mixed $newsletterCreatePerson
     */
    public function setNewsletterCreatePerson($newsletterCreatePerson): void
    {
        $this->newsletterCreatePerson = $newsletterCreatePerson;
    }

    /**
     * @return mixed
     */
    public function getNewsletterCreateDate()
    {
        return $this->newsletterCreateDate;
    }

    /**
     * @param mixed $newsletterCreateDate
     */
    public function setNewsletterCreateDate($newsletterCreateDate): void
    {
        $this->newsletterCreateDate = $newsletterCreateDate;
    }

    /**
     * @return mixed
     */
    public function getNewsletterStatus()
    {
        return $this->newsletterStatus;
    }

    /**
     * @param mixed $newsletterStatus
     */
    public function setNewsletterStatus($newsletterStatus): void
    {
        $this->newsletterStatus = $newsletterStatus;
    }

    /**
     * @return mixed
     */
    public function getNewsletterEmails()
    {
        return $this->newsletterEmails;
    }

    /**
     * @param mixed $newsletterEmails
     */
    public function setNewsletterEmails($newsletterEmails): void
    {
        $this->newsletterEmails = $newsletterEmails;
    }
}