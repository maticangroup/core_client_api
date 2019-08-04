<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/13/2019
 * Time: 12:30 PM
 */

namespace Matican\FormModels\Repository;


class CitiesModel
{
    private $provinceId;
    private $cities;

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
    public function getCities()
    {
        return $this->cities;
    }

    /**
     * @param mixed $cities
     */
    public function setCities($cities): void
    {
        $this->cities = $cities;
    }
}