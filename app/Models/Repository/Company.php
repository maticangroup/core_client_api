<?php

namespace App\Models\Repository;

use App\Core\Concepts\CRUDActions;
use App\Core\DataTypes\EconomicCode;
use App\Core\DataTypes\Email;
use App\Core\DataTypes\NationalCode;
use App\Core\DataTypes\RegisterCode;

class Company extends CRUDActions
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
     * @param NationalCode
     */
    private $national_code;

    /**
     * @param RegisterCode
     */
    private $register_code;

    /**
     * @param EconomicCode
     */
    private $economic_code;

    /**
     * @param Email
     */
    private $email;

    /**
     * @param Telephone
     */
    private $telephones;


    /**
     * @param Person
     */
//    private $related_people;

    /**
     * @param Location
     */
//    private $locations;

    /**
     * @param Person
     */
//    private $employees;


    public function __construct()
    {
        $this->telephones = [];
//        $this->related_people = [];
//        $this->locations = [];
//        $this->employees = [];
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
     * @return Company
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return NationalCode
     */
    public function getNationalCode()
    {
        return $this->national_code;
    }

    /**
     * @param NationalCode $national_code
     * @return Company
     */
    public function setNationalCode(NationalCode $national_code)
    {
        $this->national_code = $national_code;

        return $this;
    }

    /**
     * @return RegisterCode
     */
    public function getRegisterCode()
    {
        return $this->register_code;
    }

    /**
     * @param RegisterCode $register_code
     * @return Company
     */
    public function setRegisterCode(RegisterCode $register_code)
    {
        $this->register_code = $register_code;

        return $this;
    }

    /**
     * @return EconomicCode
     */
    public function getEconomicCode()
    {
        return $this->economic_code;
    }

    /**
     * @param EconomicCode $economic_code
     * @return Company
     */
    public function setEconomicCode(EconomicCode $economic_code)
    {
        $this->economic_code = $economic_code;

        return $this;
    }

    /**
     * @return Email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param Email $email
     * @return Company
     */
    public function setEmail(Email $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return Telephone[]
     */
    public function getTelephones()
    {
        return $this->telephones;
    }

    /**
     * @return Person[]
     */
    public function getRelatedPeople()
    {
//        return $this->related_people;
    }

    /**
     * @return Location[]
     */
    public function getLocations()
    {
//        return $this->locations;
    }

    /**
     * @return Person[]
     */
    public function getEmployees()
    {
//        return $this->employees;
    }
}
