<?php

namespace Matican\Models\Repository;

use Matican\Core\Concepts\CRUDActions;
use Matican\Core\DataTypes\Text;
use Matican\Core\DataTypes\ZipCode;

class Location extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param District
     */
    private $district;

    /**
     * @param ZipCode
     */
    private $zip_code;

    /**
     * @param Text
     */
    private $address;

    /**
     * @param GeoPoint
     */
    private $geo_point;

    /**
     * @param Person
     */
    private $person;


    /**
     * @param Company
     */
    private $company;


    public function __construct()
    {

    }


    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @return District
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * @param District $district
     * @return Location
     */
    public function setDistrict(District $district)
    {
        $this->district = $district;

        return $this;
    }

    /**
     * @return ZipCode
     */
    public function getZipCode()
    {
        return $this->zip_code;
    }

    /**
     * @param ZipCode $zip_code
     * @return Location
     */
    public function setZipCode(ZipCode $zip_code)
    {
        $this->zip_code = $zip_code;

        return $this;
    }

    /**
     * @return Text
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param Text $address
     * @return Location
     */
    public function setAddress(Text $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return GeoPoint
     */
    public function getGeoPoint()
    {
        return $this->geo_point;
    }

    /**
     * @param GeoPoint $geo_point
     * @return Location
     */
    public function setGeoPoint(GeoPoint $geo_point)
    {
        $this->geo_point = $geo_point;

        return $this;
    }

    /**
     * @return Person
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * @param Person $person
     * @return Location
     */
    public function setPerson(Person $person)
    {
        $this->person = $person;

        return $this;
    }


    /**
     * @return Company
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param Company $company
     * @return Location
     */
    public function setCompany(Company $company)
    {
        $this->company = $company;

        return $this;
    }
}
