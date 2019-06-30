<?php

namespace App\Models\Repository;

use App\Core\Concepts\CRUDActions;
use App\Core\DataTypes\Money;

class Guarantee extends CRUDActions
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
     * @param GuaranteeStatus
     */
    private $status;

    /**
     * @param GuaranteeProvider
     */
    private $provider;

    /**
     * @param GuaranteeDuration
     */
    private $duration;

    /**
     * @param Money
     */
    private $price;



    public function __construct()
    {

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
     * @return Guarantee
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return GuaranteeStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param GuaranteeStatus $status
     * @return Guarantee
     */
    public function setStatus(GuaranteeStatus $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return GuaranteeProvider
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param GuaranteeProvider $provider
     * @return Guarantee
     */
    public function setProvider(GuaranteeProvider $provider)
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * @return GuaranteeDuration
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param GuaranteeDuration $duration
     * @return Guarantee
     */
    public function setDuration(GuaranteeDuration $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * @return Money
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param Money $price
     */
    public function setPrice(Money $price)
    {
        $this->price = $price;
    }

    public function changeGuaranteeStatus($machineName)
    {
        return "";
    }
}
