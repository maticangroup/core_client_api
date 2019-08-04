<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/22/2019
 * Time: 10:58 AM
 */

namespace App\FormModels\Notification;


class NewsletterStatusModel
{
    private $newsletterStatusId;
    private $newsletterStatusName;
    private $newsletterStatusMachineName;
    private $newsletterStatusColor;
    private $newsletterId;

    /**
     * @return mixed
     */
    public function getNewsletterStatusId()
    {
        return $this->newsletterStatusId;
    }

    /**
     * @param mixed $newsletterStatusId
     */
    public function setNewsletterStatusId($newsletterStatusId): void
    {
        $this->newsletterStatusId = $newsletterStatusId;
    }

    /**
     * @return mixed
     */
    public function getNewsletterStatusName()
    {
        return $this->newsletterStatusName;
    }

    /**
     * @param mixed $newsletterStatusName
     */
    public function setNewsletterStatusName($newsletterStatusName): void
    {
        $this->newsletterStatusName = $newsletterStatusName;
    }

    /**
     * @return mixed
     */
    public function getNewsletterStatusMachineName()
    {
        return $this->newsletterStatusMachineName;
    }

    /**
     * @param mixed $newsletterStatusMachineName
     */
    public function setNewsletterStatusMachineName($newsletterStatusMachineName): void
    {
        $this->newsletterStatusMachineName = $newsletterStatusMachineName;
    }

    /**
     * @return mixed
     */
    public function getNewsletterStatusColor()
    {
        return $this->newsletterStatusColor;
    }

    /**
     * @param mixed $newsletterStatusColor
     */
    public function setNewsletterStatusColor($newsletterStatusColor): void
    {
        $this->newsletterStatusColor = $newsletterStatusColor;
    }

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
}