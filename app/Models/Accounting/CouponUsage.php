<?php

namespace App\Models\Accounting;

use App\Core\Concepts\CRUDActions;
use App\Models\Repository\Person;

class CouponUsage extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param CouponGroup
     */
    private $coupon;

    /**
     * @param Person
     */
    private $person;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return CouponGroup
     */
    public function getCoupon()
    {
        return $this->coupon;
    }

    /**
     * @param CouponGroup $coupon
     * @return CouponUsage
     */
    public function setCoupon(CouponGroup $coupon)
    {
        $this->coupon = $coupon;

        return $this;
    }

    /**
     * @return Person
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * @param Person $person
     */
    public function setPerson(Person $person)
    {
        $this->person = $person;
    }


}
