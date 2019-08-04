<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/14/2019
 * Time: 9:59 AM
 */

namespace Matican\FormModels\Repository;


class ProvinceModel
{
    private $provinceId;
    private $provinceName;

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
}