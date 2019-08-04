<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/13/2019
 * Time: 12:29 PM
 */

namespace App\FormModels\Repository;


class ProvincesModel
{
    private $countryId;
    private $provinces;

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
    public function getProvinces()
    {
        return $this->provinces;
    }

    /**
     * @param mixed $provinces
     */
    public function setProvinces($provinces): void
    {
        $this->provinces = $provinces;
    }
}