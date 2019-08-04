<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/1/2019
 * Time: 6:05 PM
 */

namespace Matican\FormModels\Repository;


class GuaranteeProviderModel
{
    private $guaranteeProviderID;
    private $guaranteeProviderName;
    private $guaranteeProviderStatus;
    private $guaranteeId;

    /**
     * @return mixed
     */
    public function getGuaranteeProviderID()
    {
        return $this->guaranteeProviderID;
    }

    /**
     * @param mixed $guaranteeProviderID
     */
    public function setGuaranteeProviderID($guaranteeProviderID): void
    {
        $this->guaranteeProviderID = $guaranteeProviderID;
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
    public function getGuaranteeProviderStatus()
    {
        return $this->guaranteeProviderStatus;
    }

    /**
     * @param mixed $guaranteeProviderStatus
     */
    public function setGuaranteeProviderStatus($guaranteeProviderStatus): void
    {
        $this->guaranteeProviderStatus = $guaranteeProviderStatus;
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