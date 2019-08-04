<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/22/2019
 * Time: 10:57 AM
 */

namespace Matican\FormModels\Notification;


class SubscriberModel
{
    private $subscriberId;
    private $subscriberEmail;
    private $subscriberRegisterDate;
    private $newsletterId;

    /**
     * @return mixed
     */
    public function getSubscriberId()
    {
        return $this->subscriberId;
    }

    /**
     * @param mixed $subscriberId
     */
    public function setSubscriberId($subscriberId): void
    {
        $this->subscriberId = $subscriberId;
    }

    /**
     * @return mixed
     */
    public function getSubscriberEmail()
    {
        return $this->subscriberEmail;
    }

    /**
     * @param mixed $subscriberEmail
     */
    public function setSubscriberEmail($subscriberEmail): void
    {
        $this->subscriberEmail = $subscriberEmail;
    }

    /**
     * @return mixed
     */
    public function getSubscriberRegisterDate()
    {
        return $this->subscriberRegisterDate;
    }

    /**
     * @param mixed $subscriberRegisterDate
     */
    public function setSubscriberRegisterDate($subscriberRegisterDate): void
    {
        $this->subscriberRegisterDate = $subscriberRegisterDate;
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