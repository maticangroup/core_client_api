<?php

namespace App\Models\Notifications;


use App\Core\Concepts\CRUDActions;
use App\Core\DataTypes\DateTime;
use App\Core\DataTypes\Email;

class NewsLetterSubscriptionList extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param Email
     */
    private $email;

    /**
     * @param DateTime
     */
    private $register_date;

    /**
     * @param NewsLetterSubscriptionStatus
     */
    private $newsLetterSubscriptionStatus;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param Email $email
     * @return NewsLetterSubscriptionList
     */
    public function setEmail(Email $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getRegisterDate()
    {
        return $this->register_date;
    }

    /**
     * @param DateTime $register_date
     * @return NewsLetterSubscriptionList
     */
    public function setRegisterDate(DateTime $register_date)
    {
        $this->register_date = $register_date;

        return $this;
    }

    /**
     * @return NewsLetterSubscriptionStatus
     */
    public function getNewsLetterSubscriptionStatus()
    {
        return $this->newsLetterSubscriptionStatus;
    }

    /**
     * @param NewsLetterSubscriptionStatus $newsLetterSubscriptionStatus
     * @return NewsLetterSubscriptionList
     */
    public function setNewsLetterSubscriptionStatus(NewsLetterSubscriptionStatus $newsLetterSubscriptionStatus)
    {
        $this->newsLetterSubscriptionStatus = $newsLetterSubscriptionStatus;

        return $this;
    }

    /**
     * @param $machineName
     * @return string
     */
    public function changeNewsLetterSubscriptionStatus($machineName)
    {
        return "";
    }
}
