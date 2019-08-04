<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/18/2019
 * Time: 3:39 PM
 */

namespace Matican\FormModels\CRM;


class CustomerGroupModel
{
    private $customerGroupId;
    private $customerGroupName;
    private $customerGroupDescription;
    private $customerGroupCreateDate;
    private $customerGroupCreatePerson;
    private $customerGroupPersons;
    private $customerGroupStatus;

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

    /**
     * @return mixed
     */
    public function getCustomerGroupName()
    {
        return $this->customerGroupName;
    }

    /**
     * @param mixed $customerGroupName
     */
    public function setCustomerGroupName($customerGroupName): void
    {
        $this->customerGroupName = $customerGroupName;
    }

    /**
     * @return mixed
     */
    public function getCustomerGroupDescription()
    {
        return $this->customerGroupDescription;
    }

    /**
     * @param mixed $customerGroupDescription
     */
    public function setCustomerGroupDescription($customerGroupDescription): void
    {
        $this->customerGroupDescription = $customerGroupDescription;
    }

    /**
     * @return mixed
     */
    public function getCustomerGroupCreateDate()
    {
        return $this->customerGroupCreateDate;
    }

    /**
     * @param mixed $customerGroupCreateDate
     */
    public function setCustomerGroupCreateDate($customerGroupCreateDate): void
    {
        $this->customerGroupCreateDate = $customerGroupCreateDate;
    }

    /**
     * @return mixed
     */
    public function getCustomerGroupCreatePerson()
    {
        return $this->customerGroupCreatePerson;
    }

    /**
     * @param mixed $customerGroupCreatePerson
     */
    public function setCustomerGroupCreatePerson($customerGroupCreatePerson): void
    {
        $this->customerGroupCreatePerson = $customerGroupCreatePerson;
    }

    /**
     * @return mixed
     */
    public function getCustomerGroupPersons()
    {
        return $this->customerGroupPersons;
    }

    /**
     * @param mixed $customerGroupPersons
     */
    public function setCustomerGroupPersons($customerGroupPersons): void
    {
        $this->customerGroupPersons = $customerGroupPersons;
    }

    /**
     * @return mixed
     */
    public function getCustomerGroupStatus()
    {
        return $this->customerGroupStatus;
    }

    /**
     * @param mixed $customerGroupStatus
     */
    public function setCustomerGroupStatus($customerGroupStatus): void
    {
        $this->customerGroupStatus = $customerGroupStatus;
    }
}