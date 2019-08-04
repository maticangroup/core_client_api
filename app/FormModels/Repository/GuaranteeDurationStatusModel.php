<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/4/2019
 * Time: 3:26 PM
 */

namespace App\FormModels\Repository;


class GuaranteeDurationStatusModel
{
    private $guaranteeDurationStatusId;
    private $guaranteeDurationStatusName;
    private $guaranteeDurationStatusMachineName;
    private $guaranteeDurationStatusColor;
    private $guaranteeDurationId;

    /**
     * @return mixed
     */
    public function getGuaranteeDurationStatusId()
    {
        return $this->guaranteeDurationStatusId;
    }

    /**
     * @param mixed $guaranteeDurationStatusId
     */
    public function setGuaranteeDurationStatusId($guaranteeDurationStatusId): void
    {
        $this->guaranteeDurationStatusId = $guaranteeDurationStatusId;
    }

    /**
     * @return mixed
     */
    public function getGuaranteeDurationStatusName()
    {
        return $this->guaranteeDurationStatusName;
    }

    /**
     * @param mixed $guaranteeDurationStatusName
     */
    public function setGuaranteeDurationStatusName($guaranteeDurationStatusName): void
    {
        $this->guaranteeDurationStatusName = $guaranteeDurationStatusName;
    }

    /**
     * @return mixed
     */
    public function getGuaranteeDurationStatusMachineName()
    {
        return $this->guaranteeDurationStatusMachineName;
    }

    /**
     * @param mixed $guaranteeDurationStatusMachineName
     */
    public function setGuaranteeDurationStatusMachineName($guaranteeDurationStatusMachineName): void
    {
        $this->guaranteeDurationStatusMachineName = $guaranteeDurationStatusMachineName;
    }

    /**
     * @return mixed
     */
    public function getGuaranteeDurationStatusColor()
    {
        return $this->guaranteeDurationStatusColor;
    }

    /**
     * @param mixed $guaranteeDurationStatusColor
     */
    public function setGuaranteeDurationStatusColor($guaranteeDurationStatusColor): void
    {
        $this->guaranteeDurationStatusColor = $guaranteeDurationStatusColor;
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
}