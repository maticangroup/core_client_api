<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/9/2019
 * Time: 6:16 PM
 */

namespace App\FormModels\Sale;


class OfferGroupModel
{
    private $offerGroupId;
    private $offerGroupName;
    private $offerGroupSerial;
    private $offerGroupStatus;
    private $offerGroupProductsCount;
    private $offerGroupProducts;
    private $offerGroupCreatePerson;
    private $offerGroupCreateDate;

    /**
     * @return mixed
     */
    public function getOfferGroupId()
    {
        return $this->offerGroupId;
    }

    /**
     * @param mixed $offerGroupId
     */
    public function setOfferGroupId($offerGroupId): void
    {
        $this->offerGroupId = $offerGroupId;
    }

    /**
     * @return mixed
     */
    public function getOfferGroupName()
    {
        return $this->offerGroupName;
    }

    /**
     * @param mixed $offerGroupName
     */
    public function setOfferGroupName($offerGroupName): void
    {
        $this->offerGroupName = $offerGroupName;
    }

    /**
     * @return mixed
     */
    public function getOfferGroupSerial()
    {
        return $this->offerGroupSerial;
    }

    /**
     * @param mixed $offerGroupSerial
     */
    public function setOfferGroupSerial($offerGroupSerial): void
    {
        $this->offerGroupSerial = $offerGroupSerial;
    }

    /**
     * @return mixed
     */
    public function getOfferGroupStatus()
    {
        return $this->offerGroupStatus;
    }

    /**
     * @param mixed $offerGroupStatus
     */
    public function setOfferGroupStatus($offerGroupStatus): void
    {
        $this->offerGroupStatus = $offerGroupStatus;
    }

    /**
     * @return mixed
     */
    public function getOfferGroupProductsCount()
    {
        return $this->offerGroupProductsCount;
    }

    /**
     * @param mixed $offerGroupProductsCount
     */
    public function setOfferGroupProductsCount($offerGroupProductsCount): void
    {
        $this->offerGroupProductsCount = $offerGroupProductsCount;
    }

    /**
     * @return mixed
     */
    public function getOfferGroupProducts()
    {
        return $this->offerGroupProducts;
    }

    /**
     * @param mixed $offerGroupProducts
     */
    public function setOfferGroupProducts($offerGroupProducts): void
    {
        $this->offerGroupProducts = $offerGroupProducts;
    }

    /**
     * @return mixed
     */
    public function getOfferGroupCreatePerson()
    {
        return $this->offerGroupCreatePerson;
    }

    /**
     * @param mixed $offerGroupCreatePerson
     */
    public function setOfferGroupCreatePerson($offerGroupCreatePerson): void
    {
        $this->offerGroupCreatePerson = $offerGroupCreatePerson;
    }

    /**
     * @return mixed
     */
    public function getOfferGroupCreateDate()
    {
        return $this->offerGroupCreateDate;
    }

    /**
     * @param mixed $offerGroupCreateDate
     */
    public function setOfferGroupCreateDate($offerGroupCreateDate): void
    {
        $this->offerGroupCreateDate = $offerGroupCreateDate;
    }
}