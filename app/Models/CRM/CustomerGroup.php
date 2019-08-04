<?php

namespace Matican\Models\CRM;


use Matican\Core\Concepts\CRUDActions;
use Matican\Core\DataTypes\DateTime;
use Matican\Core\DataTypes\Text;
use Matican\Models\Repository\Person;

class CustomerGroup extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param string
     */
    private $name;

    /**
     * @param Text
     */
    private $description;

    /**
     * @param DateTime
     */
    private $create_date;

    /**
     * @param CustomerGroupStatus
     */
    private $customerGroupStatus;

    /**
     * @param Person
     */
//    private $people;

    public function __construct()
    {
//        $this->people = [];
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return CustomerGroup
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Text
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param Text $description
     * @return CustomerGroup
     */
    public function setDescription(Text $description)
    {
        $this->description = $description;

        return $this;
    }


    /**
     * @return DateTime
     */
    public function getCreateDate()
    {
        return $this->create_date;
    }

    /**
     * @param DateTime $create_date
     * @return CustomerGroup
     */
    public function setCreateDate(DateTime $create_date)
    {
        $this->create_date = $create_date;

        return $this;
    }

    /**
     * @return CustomerGroupStatus
     */
    public function getCustomerGroupStatus()
    {
        return $this->customerGroupStatus;
    }

    /**
     * @param CustomerGroupStatus $customerGroupStatus
     * @return $this
     */
    public function setCustomerGroupStatus(CustomerGroupStatus $customerGroupStatus)
    {
        $this->customerGroupStatus = $customerGroupStatus;

        return $this;
    }

    /**
     * @return Person[]
     */
    public function getPeople()
    {
//        return $this->people;
    }

    public function addPerson()
    {
        return "";
    }

    public function removePerson()
    {
        return "";
    }
}
