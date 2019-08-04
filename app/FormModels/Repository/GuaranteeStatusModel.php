<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/4/2019
 * Time: 11:21 AM
 */

namespace Matican\FormModels\Repository;


class GuaranteeStatusModel
{
    private $guaranteeStatusId;
    private $guaranteeStatusName;
    private $guaranteeStatusMachineName;
    private $guaranteeStatusColor;
    private $guaranteeId;

    /**
     * @return mixed
     */
    public function getGuaranteeStatusId()
    {
        return $this->guaranteeStatusId;
    }

    /**
     * @param mixed $guaranteeStatusId
     */
    public function setGuaranteeStatusId($guaranteeStatusId): void
    {
        $this->guaranteeStatusId = $guaranteeStatusId;
    }

    /**
     * @return mixed
     */
    public function getGuaranteeStatusName()
    {
        return $this->guaranteeStatusName;
    }

    /**
     * @param mixed $guaranteeStatusName
     */
    public function setGuaranteeStatusName($guaranteeStatusName): void
    {
        $this->guaranteeStatusName = $guaranteeStatusName;
    }

    /**
     * @return mixed
     */
    public function getGuaranteeStatusMachineName()
    {
        return $this->guaranteeStatusMachineName;
    }

    /**
     * @param mixed $guaranteeStatusMachineName
     */
    public function setGuaranteeStatusMachineName($guaranteeStatusMachineName): void
    {
        $this->guaranteeStatusMachineName = $guaranteeStatusMachineName;
    }

    /**
     * @return mixed
     */
    public function getGuaranteeStatusColor()
    {
        return $this->guaranteeStatusColor;
    }

    /**
     * @param mixed $guaranteeStatusColor
     */
    public function setGuaranteeStatusColor($guaranteeStatusColor): void
    {
        $this->guaranteeStatusColor = $guaranteeStatusColor;
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