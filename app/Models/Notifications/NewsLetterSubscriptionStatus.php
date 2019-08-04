<?php

namespace Matican\Models\Notifications;


use Matican\Core\Concepts\CRUDActions;
use Matican\Core\DataTypes\MachineName;

class NewsLetterSubscriptionStatus extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param string
     */
    private $name;

    /**
     * @param MachineName
     */
    private $machine_name;

    /**
     * @param NewsLetterSubscriptionList
     */
    private $subscriptions;

    public function __construct()
    {
        $this->subscriptions = [];
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return NewsLetterSubscriptionStatus
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return MachineName
     */
    public function getMachineName()
    {
        return $this->machine_name;
    }

    /**
     * @param MachineName $machine_name
     * @return NewsLetterSubscriptionStatus
     */
    public function setMachineName(MachineName $machine_name)
    {
        $this->machine_name = $machine_name;

        return $this;
    }

    /**
     * @return NewsLetterSubscriptionList[]
     */
    public function getSubscriptions()
    {
        return $this->subscriptions;
    }

//    public function addSubscription(NewsLetterSubscriptionList $subscription)
//    {
//        if (!$this->subscriptions->contains($subscription)) {
//            $this->subscriptions[] = $subscription;
//            $subscription->setNewsLetterSubscriptionStatus($this);
//        }
//
//        return $this;
//    }
//
//    public function removeSubscription(NewsLetterSubscriptionList $subscription)
//    {
//        if ($this->subscriptions->contains($subscription)) {
//            $this->subscriptions->removeElement($subscription);
//            // set the owning side to null (unless already changed)
//            if ($subscription->getNewsLetterSubscriptionStatus() === $this) {
//                $subscription->setNewsLetterSubscriptionStatus(null);
//            }
//        }
//
//        return $this;
//    }
}
