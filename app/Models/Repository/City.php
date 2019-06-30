<?php

namespace Matican\Models\Repository;


use Matican\Core\Concepts\CRUDActions;

class City extends CRUDActions
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
     * @param District
     */
    private $districts;

    /**
     * @param Province
     */
    private $province;

    public function __construct()
    {
        $this->districts = [];
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
     * @return City
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return District[]
     */
    public function getDistricts()
    {
        return $this->districts;
    }

    /**
     * @return Province
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @param Province $province
     * @return City
     */
    public function setProvince(Province $province)
    {
        $this->province = $province;

        return $this;
    }
}
