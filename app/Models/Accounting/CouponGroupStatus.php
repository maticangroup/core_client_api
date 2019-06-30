<?php

namespace App\Models\Accounting;


use App\Core\Concepts\CRUDActions;
use App\Core\DataTypes\MachineName;

class CouponGroupStatus extends CRUDActions
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
     * @param CouponGroup
     */
    private $coupon_groups;

    /**
     * CouponGroupStatus constructor.
     */
    public function __construct()
    {
        $this->coupon_groups = [];
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
     * @return $this
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
     * @return $this
     */
    public function setMachineName(MachineName $machine_name)
    {
        $this->machine_name = $machine_name;

        return $this;
    }


    /**
     * @return CouponGroup[]
     */
    public function getCouponGroups()
    {
        return $this->coupon_groups;
    }
}
