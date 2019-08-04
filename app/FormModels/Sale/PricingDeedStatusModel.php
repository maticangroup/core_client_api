<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/9/2019
 * Time: 10:12 PM
 */

namespace Matican\FormModels\Sale;


class PricingDeedStatusModel
{
    private $pricingDeedStatusId;
    private $pricingDeedStatusName;
    private $pricingDeedStatusMachineName;
    private $pricingDeedStatusColor;
    private $pricingDeedId;

    /**
     * @return mixed
     */
    public function getPricingDeedStatusId()
    {
        return $this->pricingDeedStatusId;
    }

    /**
     * @param mixed $pricingDeedStatusId
     */
    public function setPricingDeedStatusId($pricingDeedStatusId): void
    {
        $this->pricingDeedStatusId = $pricingDeedStatusId;
    }

    /**
     * @return mixed
     */
    public function getPricingDeedStatusName()
    {
        return $this->pricingDeedStatusName;
    }

    /**
     * @param mixed $pricingDeedStatusName
     */
    public function setPricingDeedStatusName($pricingDeedStatusName): void
    {
        $this->pricingDeedStatusName = $pricingDeedStatusName;
    }

    /**
     * @return mixed
     */
    public function getPricingDeedStatusMachineName()
    {
        return $this->pricingDeedStatusMachineName;
    }

    /**
     * @param mixed $pricingDeedStatusMachineName
     */
    public function setPricingDeedStatusMachineName($pricingDeedStatusMachineName): void
    {
        $this->pricingDeedStatusMachineName = $pricingDeedStatusMachineName;
    }

    /**
     * @return mixed
     */
    public function getPricingDeedStatusColor()
    {
        return $this->pricingDeedStatusColor;
    }

    /**
     * @param mixed $pricingDeedStatusColor
     */
    public function setPricingDeedStatusColor($pricingDeedStatusColor): void
    {
        $this->pricingDeedStatusColor = $pricingDeedStatusColor;
    }

    /**
     * @return mixed
     */
    public function getPricingDeedId()
    {
        return $this->pricingDeedId;
    }

    /**
     * @param mixed $pricingDeedId
     */
    public function setPricingDeedId($pricingDeedId): void
    {
        $this->pricingDeedId = $pricingDeedId;
    }
}