<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/13/2019
 * Time: 12:29 PM
 */

namespace Matican\FormModels\Repository;


class CountriesModel
{
    private $countries;

    /**
     * @return mixed
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * @param mixed $countries
     */
    public function setCountries($countries): void
    {
        $this->countries = $countries;
    }
}