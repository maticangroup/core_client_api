<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/16/2019
 * Time: 10:32 AM
 */

namespace Matican\FormModels\Delivery;


class DispatchPriceStatusModel
{
    private $dispatchPriceId;
    private $dispatchPriceName;
    private $dispatchPriceMachineName;
    private $dispatchPriceColor;
    private $dispatchId;

    /**
     * @return mixed
     */
    public function getDispatchPriceId()
    {
        return $this->dispatchPriceId;
    }

    /**
     * @param mixed $dispatchPriceId
     */
    public function setDispatchPriceId($dispatchPriceId): void
    {
        $this->dispatchPriceId = $dispatchPriceId;
    }

    /**
     * @return mixed
     */
    public function getDispatchPriceName()
    {
        return $this->dispatchPriceName;
    }

    /**
     * @param mixed $dispatchPriceName
     */
    public function setDispatchPriceName($dispatchPriceName): void
    {
        $this->dispatchPriceName = $dispatchPriceName;
    }

    /**
     * @return mixed
     */
    public function getDispatchPriceMachineName()
    {
        return $this->dispatchPriceMachineName;
    }

    /**
     * @param mixed $dispatchPriceMachineName
     */
    public function setDispatchPriceMachineName($dispatchPriceMachineName): void
    {
        $this->dispatchPriceMachineName = $dispatchPriceMachineName;
    }

    /**
     * @return mixed
     */
    public function getDispatchPriceColor()
    {
        return $this->dispatchPriceColor;
    }

    /**
     * @param mixed $dispatchPriceColor
     */
    public function setDispatchPriceColor($dispatchPriceColor): void
    {
        $this->dispatchPriceColor = $dispatchPriceColor;
    }

    /**
     * @return mixed
     */
    public function getDispatchId()
    {
        return $this->dispatchId;
    }

    /**
     * @param mixed $dispatchId
     */
    public function setDispatchId($dispatchId): void
    {
        $this->dispatchId = $dispatchId;
    }
}