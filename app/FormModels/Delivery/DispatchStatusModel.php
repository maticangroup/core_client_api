<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/15/2019
 * Time: 8:50 PM
 */

namespace Matican\FormModels\Delivery;


class DispatchStatusModel
{
    private $dispatchStatusId;
    private $dispatchStatusName;
    private $dispatchStatusMachineName;
    private $dispatchStatusColor;
    private $dispatchId;

    /**
     * @return mixed
     */
    public function getDispatchStatusId()
    {
        return $this->dispatchStatusId;
    }

    /**
     * @param mixed $dispatchStatusId
     */
    public function setDispatchStatusId($dispatchStatusId): void
    {
        $this->dispatchStatusId = $dispatchStatusId;
    }

    /**
     * @return mixed
     */
    public function getDispatchStatusName()
    {
        return $this->dispatchStatusName;
    }

    /**
     * @param mixed $dispatchStatusName
     */
    public function setDispatchStatusName($dispatchStatusName): void
    {
        $this->dispatchStatusName = $dispatchStatusName;
    }

    /**
     * @return mixed
     */
    public function getDispatchStatusMachineName()
    {
        return $this->dispatchStatusMachineName;
    }

    /**
     * @param mixed $dispatchStatusMachineName
     */
    public function setDispatchStatusMachineName($dispatchStatusMachineName): void
    {
        $this->dispatchStatusMachineName = $dispatchStatusMachineName;
    }

    /**
     * @return mixed
     */
    public function getDispatchStatusColor()
    {
        return $this->dispatchStatusColor;
    }

    /**
     * @param mixed $dispatchStatusColor
     */
    public function setDispatchStatusColor($dispatchStatusColor): void
    {
        $this->dispatchStatusColor = $dispatchStatusColor;
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