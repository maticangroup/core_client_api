<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/1/2019
 * Time: 5:55 PM
 */

namespace App\FormModels\Repository;


class GuaranteeModel
{
    private $guaranteeID;
    private $guaranteeName;
    private $guaranteePrice;
    private $guaranteeProviderId;
    private $guaranteeProviderName;
    private $guaranteeDurationId;
    private $guaranteeDurationName;
    private $guaranteeStatus;
    private $itemId;

    /**
     * @return mixed
     */
    public function getGuaranteeID()
    {
        return $this->guaranteeID;
    }

    /**
     * @param mixed $guaranteeID
     */
    public function setGuaranteeID($guaranteeID): void
    {
        $this->guaranteeID = $guaranteeID;
    }

    /**
     * @return mixed
     */
    public function getGuaranteeName()
    {
        return $this->guaranteeName;
    }

    /**
     * @param mixed $guaranteeName
     */
    public function setGuaranteeName($guaranteeName): void
    {
        $this->guaranteeName = $guaranteeName;
    }

    /**
     * @return mixed
     */
    public function getGuaranteePrice()
    {
        return $this->guaranteePrice;
    }

    /**
     * @param mixed $guaranteePrice
     */
    public function setGuaranteePrice($guaranteePrice): void
    {
        $this->guaranteePrice = $guaranteePrice;
    }

    /**
     * @return mixed
     */
    public function getGuaranteeProviderId()
    {
        return $this->guaranteeProviderId;
    }

    /**
     * @param mixed $guaranteeProviderId
     */
    public function setGuaranteeProviderId($guaranteeProviderId): void
    {
        $this->guaranteeProviderId = $guaranteeProviderId;
    }

    /**
     * @return mixed
     */
    public function getGuaranteeProviderName()
    {
        return $this->guaranteeProviderName;
    }

    /**
     * @param mixed $guaranteeProviderName
     */
    public function setGuaranteeProviderName($guaranteeProviderName): void
    {
        $this->guaranteeProviderName = $guaranteeProviderName;
    }

    /**
     * @return mixed
     */
    public function getGuaranteeDurationId()
    {
        return $this->guaranteeDurationId;
    }

    /**
     * @param mixed $guaranteeDurationId
     */
    public function setGuaranteeDurationId($guaranteeDurationId): void
    {
        $this->guaranteeDurationId = $guaranteeDurationId;
    }

    /**
     * @return mixed
     */
    public function getGuaranteeDurationName()
    {
        return $this->guaranteeDurationName;
    }

    /**
     * @param mixed $guaranteeDurationName
     */
    public function setGuaranteeDurationName($guaranteeDurationName): void
    {
        $this->guaranteeDurationName = $guaranteeDurationName;
    }


    /**
     * @return mixed
     */
    public function getGuaranteeStatus()
    {
        return $this->guaranteeStatus;
    }

    /**
     * @param mixed $guaranteeStatus
     */
    public function setGuaranteeStatus($guaranteeStatus): void
    {
        $this->guaranteeStatus = $guaranteeStatus;
    }

    /**
     * @return mixed
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param mixed $itemId
     */
    public function setItemId($itemId): void
    {
        $this->itemId = $itemId;
    }

}