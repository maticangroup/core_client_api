<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/18/2019
 * Time: 3:49 PM
 */

namespace Matican\FormModels\CRM;


class CustomerGroupStatusModel
{
    private $customerGroupStatusId;
    private $customerGroupStatusName;
    private $customerGroupStatusMachineName;
    private $customerGroupStatusColor;
    private $customerGroupId;

    /**
     * @return mixed
     */
    public function getCustomerGroupStatusId()
    {
        return $this->customerGroupStatusId;
    }

    /**
     * @param mixed $customerGroupStatusId
     */
    public function setCustomerGroupStatusId($customerGroupStatusId): void
    {
        $this->customerGroupStatusId = $customerGroupStatusId;
    }

    /**
     * @return mixed
     */
    public function getCustomerGroupStatusName()
    {
        return $this->customerGroupStatusName;
    }

    /**
     * @param mixed $customerGroupStatusName
     */
    public function setCustomerGroupStatusName($customerGroupStatusName): void
    {
        $this->customerGroupStatusName = $customerGroupStatusName;
    }

    /**
     * @return mixed
     */
    public function getCustomerGroupStatusMachineName()
    {
        return $this->customerGroupStatusMachineName;
    }

    /**
     * @param mixed $customerGroupStatusMachineName
     */
    public function setCustomerGroupStatusMachineName($customerGroupStatusMachineName): void
    {
        $this->customerGroupStatusMachineName = $customerGroupStatusMachineName;
    }

    /**
     * @return mixed
     */
    public function getCustomerGroupStatusColor()
    {
        return $this->customerGroupStatusColor;
    }

    /**
     * @param mixed $customerGroupStatusColor
     */
    public function setCustomerGroupStatusColor($customerGroupStatusColor): void
    {
        $this->customerGroupStatusColor = $customerGroupStatusColor;
    }

    /**
     * @return mixed
     */
    public function getCustomerGroupId()
    {
        return $this->customerGroupId;
    }

    /**
     * @param mixed $customerGroupId
     */
    public function setCustomerGroupId($customerGroupId): void
    {
        $this->customerGroupId = $customerGroupId;
    }
}