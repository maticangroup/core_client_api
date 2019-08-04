<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/4/2019
 * Time: 3:34 PM
 */

namespace App\FormModels\Repository;


class GuaranteeProviderStatusModel
{
    private $guaranteeProviderStatusId;
    private $guaranteeProviderStatusName;
    private $guaranteeProviderStatusMachineName;
    private $guaranteeProviderStatusColor;
    private $guaranteeProviderId;

    /**
     * @return mixed
     */
    public function getGuaranteeProviderStatusId()
    {
        return $this->guaranteeProviderStatusId;
    }

    /**
     * @param mixed $guaranteeProviderStatusId
     */
    public function setGuaranteeProviderStatusId($guaranteeProviderStatusId): void
    {
        $this->guaranteeProviderStatusId = $guaranteeProviderStatusId;
    }

    /**
     * @return mixed
     */
    public function getGuaranteeProviderStatusName()
    {
        return $this->guaranteeProviderStatusName;
    }

    /**
     * @param mixed $guaranteeProviderStatusName
     */
    public function setGuaranteeProviderStatusName($guaranteeProviderStatusName): void
    {
        $this->guaranteeProviderStatusName = $guaranteeProviderStatusName;
    }

    /**
     * @return mixed
     */
    public function getGuaranteeProviderStatusMachineName()
    {
        return $this->guaranteeProviderStatusMachineName;
    }

    /**
     * @param mixed $guaranteeProviderStatusMachineName
     */
    public function setGuaranteeProviderStatusMachineName($guaranteeProviderStatusMachineName): void
    {
        $this->guaranteeProviderStatusMachineName = $guaranteeProviderStatusMachineName;
    }

    /**
     * @return mixed
     */
    public function getGuaranteeProviderStatusColor()
    {
        return $this->guaranteeProviderStatusColor;
    }

    /**
     * @param mixed $guaranteeProviderStatusColor
     */
    public function setGuaranteeProviderStatusColor($guaranteeProviderStatusColor): void
    {
        $this->guaranteeProviderStatusColor = $guaranteeProviderStatusColor;
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
}