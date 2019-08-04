<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/13/2019
 * Time: 11:43 AM
 */

namespace App\FormModels\Delivery;


class DistrictModel
{
    private $districtId;
    private $districtName;
    private $cityId;
    private $cityName;
    private $provinceId;
    private $provinceName;
    private $countryId;
    private $countryName;
    private $deliveryPersonId;

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
    public function getDeliveryPersonId()
    {
        return $this->deliveryPersonId;
    }

    /**
     * @param mixed $deliveryPersonId
     */
    public function setDeliveryPersonId($deliveryPersonId): void
    {
        $this->deliveryPersonId = $deliveryPersonId;
    }
}