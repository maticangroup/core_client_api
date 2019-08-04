<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/1/2019
 * Time: 5:16 PM
 */

namespace App\FormModels\Repository;


class CompanyModel
{
    private $companyID;
    private $companyName;
    private $companyNationalCode;
    private $companyRegistrationCode;
    private $companyEconomicCode;
    private $companyEmail;
    private $companyMainPhone;
    private $companyMainAddress;
    private $companyMainAddressContactPersonID;
    private $companyMainAddressContactPersonName;
    private $companyPhones;
    private $companyAddresses;
    private $companyEmployees;
    private $brandId;
    private $itemId;

    /**
     * @return mixed
     */
    public function getCompanyID()
    {
        return $this->companyID;
    }

    /**
     * @param mixed $companyID
     */
    public function setCompanyID($companyID): void
    {
        $this->companyID = $companyID;
    }

    /**
     * @return mixed
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param mixed $companyName
     */
    public function setCompanyName($companyName): void
    {
        $this->companyName = $companyName;
    }

    /**
     * @return mixed
     */
    public function getCompanyNationalCode()
    {
        return $this->companyNationalCode;
    }

    /**
     * @param mixed $companyNationalCode
     */
    public function setCompanyNationalCode($companyNationalCode): void
    {
        $this->companyNationalCode = $companyNationalCode;
    }

    /**
     * @return mixed
     */
    public function getCompanyRegistrationCode()
    {
        return $this->companyRegistrationCode;
    }

    /**
     * @param mixed $companyRegistrationCode
     */
    public function setCompanyRegistrationCode($companyRegistrationCode): void
    {
        $this->companyRegistrationCode = $companyRegistrationCode;
    }

    /**
     * @return mixed
     */
    public function getCompanyEconomicCode()
    {
        return $this->companyEconomicCode;
    }

    /**
     * @param mixed $companyEconomicCode
     */
    public function setCompanyEconomicCode($companyEconomicCode): void
    {
        $this->companyEconomicCode = $companyEconomicCode;
    }

    /**
     * @return mixed
     */
    public function getCompanyEmail()
    {
        return $this->companyEmail;
    }

    /**
     * @param mixed $companyEmail
     */
    public function setCompanyEmail($companyEmail): void
    {
        $this->companyEmail = $companyEmail;
    }

    /**
     * @return mixed
     */
    public function getCompanyMainPhone()
    {
        return $this->companyMainPhone;
    }

    /**
     * @param mixed $companyMainPhone
     */
    public function setCompanyMainPhone($companyMainPhone): void
    {
        $this->companyMainPhone = $companyMainPhone;
    }

    /**
     * @return mixed
     */
    public function getCompanyMainAddress()
    {
        return $this->companyMainAddress;
    }

    /**
     * @param mixed $companyMainAddress
     */
    public function setCompanyMainAddress($companyMainAddress): void
    {
        $this->companyMainAddress = $companyMainAddress;
    }

    /**
     * @return mixed
     */
    public function getCompanyMainAddressContactPersonID()
    {
        return $this->companyMainAddressContactPersonID;
    }

    /**
     * @param mixed $companyMainAddressContactPersonID
     */
    public function setCompanyMainAddressContactPersonID($companyMainAddressContactPersonID): void
    {
        $this->companyMainAddressContactPersonID = $companyMainAddressContactPersonID;
    }

    /**
     * @return mixed
     */
    public function getCompanyMainAddressContactPersonName()
    {
        return $this->companyMainAddressContactPersonName;
    }

    /**
     * @param mixed $companyMainAddressContactPersonName
     */
    public function setCompanyMainAddressContactPersonName($companyMainAddressContactPersonName): void
    {
        $this->companyMainAddressContactPersonName = $companyMainAddressContactPersonName;
    }

    /**
     * @return mixed
     */
    public function getCompanyPhones()
    {
        return $this->companyPhones;
    }

    /**
     * @param mixed $companyPhones
     */
    public function setCompanyPhones($companyPhones): void
    {
        $this->companyPhones = $companyPhones;
    }

    /**
     * @return mixed
     */
    public function getCompanyAddresses()
    {
        return $this->companyAddresses;
    }

    /**
     * @param mixed $companyAddresses
     */
    public function setCompanyAddresses($companyAddresses): void
    {
        $this->companyAddresses = $companyAddresses;
    }

    /**
     * @return mixed
     */
    public function getCompanyEmployees()
    {
        return $this->companyEmployees;
    }

    /**
     * @param mixed $companyEmployees
     */
    public function setCompanyEmployees($companyEmployees): void
    {
        $this->companyEmployees = $companyEmployees;
    }

    /**
     * @return mixed
     */
    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * @param mixed $brandId
     */
    public function setBrandId($brandId): void
    {
        $this->brandId = $brandId;
    }

    /**
     * @return mixed
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param mixed $itemId
     */
    public function setItemId($itemId): void
    {
        $this->itemId = $itemId;
    }

}