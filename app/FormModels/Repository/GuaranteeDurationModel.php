<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/1/2019
 * Time: 6:03 PM
 */

namespace App\FormModels\Repository;


class GuaranteeDurationModel
{
    private $guaranteeDurationID;
    private $guaranteeDurationName;
    private $guaranteeDurationStatus;
    private $guaranteeId;

    /**
     * @return mixed
     */
    public function getGuaranteeDurationID()
    {
        return $this->guaranteeDurationID;
    }

    /**
     * @param mixed $guaranteeDurationID
     */
    public function setGuaranteeDurationID($guaranteeDurationID): void
    {
        $this->guaranteeDurationID = $guaranteeDurationID;
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
    public function getGuaranteeDurationStatus()
    {
        return $this->guaranteeDurationStatus;
    }

    /**
     * @param mixed $guaranteeDurationStatus
     */
    public function setGuaranteeDurationStatus($guaranteeDurationStatus): void
    {
        $this->guaranteeDurationStatus = $guaranteeDurationStatus;
    }

    /**
     * @return mixed
     */
    public function getGuaranteeId()
    {
        return $this->guaranteeId;
    }

    /**
     * @param mixed $guaranteeId
     */
    public function setGuaranteeId($guaranteeId): void
    {
        $this->guaranteeId = $guaranteeId;
    }
}