<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/1/2019
 * Time: 12:05 PM
 */

namespace App\FormModels\Repository;


use Matican\Core\DataTypes\Text;
use Matican\Core\DataTypes\ZipCode;

class LocationModel
{
    private $locationId;
    private $districtId;
    private $districtName;
    private $cityId;
    private $cityName;
    private $provinceId;
    private $provinceName;
    private $countryId;
    private $countryName;
    private $postalCode;
    private $address;
    private $locationContactPersonId;
    private $locationContactPersonFirstName;
    private $locationContactPersonLastName;
    private $locationContactPersonMobile;
    private $locationExternalContactPersonFirstName;
    private $locationExternalContactPersonLastName;
    private $locationExternalContactPersonMobile;
    private $locationLat;
    private $locationLng;
    private $locationGeoPoints;
    private $personId;
    private $companyId;
    private $inventoryId;
    private $shelveId;
    private $dispatchId;

    /**
     * @return mixed
     */
    public function getLocationId()
    {
        return $this->locationId;
    }

    /**
     * @param mixed $locationId
     */
    public function setLocationId($locationId): void
    {
        $this->locationId = $locationId;
    }

    /**
     * @return mixed
     */
    public function getDistrictId()
    {
        return $this->districtId;
    }

    /**
     * @param mixed $districtId
     */
    public function setDistrictId($districtId): void
    {
        $this->districtId = $districtId;
    }

    /**
     * @return mixed
     */
    public function getDistrictName()
    {
        return $this->districtName;
    }

    /**
     * @param mixed $districtName
     */
    public function setDistrictName($districtName): void
    {
        $this->districtName = $districtName;
    }

    /**
     * @return mixed
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * @param mixed $cityId
     */
    public function setCityId($cityId): void
    {
        $this->cityId = $cityId;
    }

    /**
     * @return mixed
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * @param mixed $cityName
     */
    public function setCityName($cityName): void
    {
        $this->cityName = $cityName;
    }

    /**
     * @return mixed
     */
    public function getProvinceId()
    {
        return $this->provinceId;
    }

    /**
     * @param mixed $provinceId
     */
    public function setProvinceId($provinceId): void
    {
        $this->provinceId = $provinceId;
    }

    /**
     * @return mixed
     */
    public function getProvinceName()
    {
        return $this->provinceName;
    }

    /**
     * @param mixed $provinceName
     */
    public function setProvinceName($provinceName): void
    {
        $this->provinceName = $provinceName;
    }

    /**
     * @return mixed
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * @param mixed $countryId
     */
    public function setCountryId($countryId): void
    {
        $this->countryId = $countryId;
    }

    /**
     * @return mixed
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * @param mixed $countryName
     */
    public function setCountryName($countryName): void
    {
        $this->countryName = $countryName;
    }

    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param mixed $postalCode
     */
    public function setPostalCode($postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getLocationContactPersonId()
    {
        return $this->locationContactPersonId;
    }

    /**
     * @param mixed $locationContactPersonId
     */
    public function setLocationContactPersonId($locationContactPersonId): void
    {
        $this->locationContactPersonId = $locationContactPersonId;
    }

    /**
     * @return mixed
     */
    public function getLocationContactPersonFirstName()
    {
        return $this->locationContactPersonFirstName;
    }

    /**
     * @param mixed $locationContactPersonFirstName
     */
    public function setLocationContactPersonFirstName($locationContactPersonFirstName): void
    {
        $this->locationContactPersonFirstName = $locationContactPersonFirstName;
    }

    /**
     * @return mixed
     */
    public function getLocationContactPersonLastName()
    {
        return $this->locationContactPersonLastName;
    }

    /**
     * @param mixed $locationContactPersonLastName
     */
    public function setLocationContactPersonLastName($locationContactPersonLastName): void
    {
        $this->locationContactPersonLastName = $locationContactPersonLastName;
    }

    /**
     * @return mixed
     */
    public function getLocationContactPersonMobile()
    {
        return $this->locationContactPersonMobile;
    }

    /**
     * @param mixed $locationContactPersonMobile
     */
    public function setLocationContactPersonMobile($locationContactPersonMobile): void
    {
        $this->locationContactPersonMobile = $locationContactPersonMobile;
    }

    /**
     * @return mixed
     */
    public function getLocationLat()
    {
        return $this->locationLat;
    }

    /**
     * @param mixed $locationLat
     */
    public function setLocationLat($locationLat): void
    {
        $this->locationLat = $locationLat;
    }

    /**
     * @return mixed
     */
    public function getLocationLng()
    {
        return $this->locationLng;
    }

    /**
     * @param mixed $locationLng
     */
    public function setLocationLng($locationLng): void
    {
        $this->locationLng = $locationLng;
    }

    /**
     * @return mixed
     */
    public function getPersonId()
    {
        return $this->personId;
    }

    /**
     * @param mixed $personId
     */
    public function setPersonId($personId): void
    {
        $this->personId = $personId;
    }

    /**
     * @return mixed
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * @param mixed $companyId
     */
    public function setCompanyId($companyId): void
    {
        $this->companyId = $companyId;
    }

    /**
     * @return mixed
     */
    public function getInventoryId()
    {
        return $this->inventoryId;
    }

    /**
     * @param mixed $inventoryId
     */
    public function setInventoryId($inventoryId): void
    {
        $this->inventoryId = $inventoryId;
    }

    /**
     * @return mixed
     */
    public function getShelveId()
    {
        return $this->shelveId;
    }

    /**
     * @param mixed $shelveId
     */
    public function setShelveId($shelveId): void
    {
        $this->shelveId = $shelveId;
    }

    /**
     * @return mixed
     */
    public function getLocationGeoPoints()
    {
        return $this->locationGeoPoints;
    }

    /**
     * @param mixed $locationGeoPoints
     */
    public function setLocationGeoPoints($locationGeoPoints): void
    {
        $this->locationGeoPoints = $locationGeoPoints;
    }

    /**
     * @return mixed
     */
    public function getDispatchId()
    {
        return $this->dispatchId;
    }

    /**
     * @param mixed $dispatchId
     */
    public function setDispatchId($dispatchId): void
    {
        $this->dispatchId = $dispatchId;
    }

    /**
     * @return mixed
     */
    public function getLocationExternalContactPersonFirstName()
    {
        return $this->locationExternalContactPersonFirstName;
    }

    /**
     * @param mixed $locationExternalContactPersonFirstName
     */
    public function setLocationExternalContactPersonFirstName($locationExternalContactPersonFirstName): void
    {
        $this->locationExternalContactPersonFirstName = $locationExternalContactPersonFirstName;
    }

    /**
     * @return mixed
     */
    public function getLocationExternalContactPersonLastName()
    {
        return $this->locationExternalContactPersonLastName;
    }

    /**
     * @param mixed $locationExternalContactPersonLastName
     */
    public function setLocationExternalContactPersonLastName($locationExternalContactPersonLastName): void
    {
        $this->locationExternalContactPersonLastName = $locationExternalContactPersonLastName;
    }

    /**
     * @return mixed
     */
    public function getLocationExternalContactPersonMobile()
    {
        return $this->locationExternalContactPersonMobile;
    }

    /**
     * @param mixed $locationExternalContactPersonMobile
     */
    public function setLocationExternalContactPersonMobile($locationExternalContactPersonMobile): void
    {
        $this->locationExternalContactPersonMobile = $locationExternalContactPersonMobile;
    }
}