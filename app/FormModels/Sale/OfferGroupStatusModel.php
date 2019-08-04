<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/9/2019
 * Time: 6:16 PM
 */

namespace App\FormModels\Sale;


class OfferGroupStatusModel
{
    private $offerGroupStatusId;
    private $offerGroupStatusName;
    private $offerGroupStatusMachineName;
    private $offerGroupStatusColor;
    private $offerGroupId;

    /**
     * @return mixed
     */
    public function getOfferGroupStatusId()
    {
        return $this->offerGroupStatusId;
    }

    /**
     * @param mixed $offerGroupStatusId
     */
    public function setOfferGroupStatusId($offerGroupStatusId): void
    {
        $this->offerGroupStatusId = $offerGroupStatusId;
    }

    /**
     * @return mixed
     */
    public function getOfferGroupStatusName()
    {
        return $this->offerGroupStatusName;
    }

    /**
     * @param mixed $offerGroupStatusName
     */
    public function setOfferGroupStatusName($offerGroupStatusName): void
    {
        $this->offerGroupStatusName = $offerGroupStatusName;
    }

    /**
     * @return mixed
     */
    public function getOfferGroupStatusMachineName()
    {
        return $this->offerGroupStatusMachineName;
    }

    /**
     * @param mixed $offerGroupStatusMachineName
     */
    public function setOfferGroupStatusMachineName($offerGroupStatusMachineName): void
    {
        $this->offerGroupStatusMachineName = $offerGroupStatusMachineName;
    }

    /**
     * @return mixed
     */
    public function getOfferGroupStatusColor()
    {
        return $this->offerGroupStatusColor;
    }

    /**
     * @param mixed $offerGroupStatusColor
     */
    public function setOfferGroupStatusColor($offerGroupStatusColor): void
    {
        $this->offerGroupStatusColor = $offerGroupStatusColor;
    }

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
}