<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/13/2019
 * Time: 12:30 PM
 */

namespace App\FormModels\Repository;


class DistrictsModel
{
    private $cityId;
    private $districts;

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
    public function getDistricts()
    {
        return $this->districts;
    }

    /**
     * @param mixed $districts
     */
    public function setDistricts($districts): void
    {
        $this->districts = $districts;
    }
}