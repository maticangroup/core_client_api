<?php

namespace App\Models\Repository;


use App\Core\Concepts\CRUDActions;
use App\Core\DataTypes\PhonePrefix;

class Telephone extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param PhonePrefix
     */
    private $prefix;

    /**
     * @param string
     */
    private $number;

    /**
     * @param Company
     */
    private $company;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return PhonePrefix
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * @param PhonePrefix $prefix
     * @return Telephone
     */
    public function setPrefix(PhonePrefix $prefix): self
    {
        $this->prefix = $prefix;

        return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     * @return Telephone
     */
    public function setNumber($number)
    {
        $this->number = $number;

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
     * @return Telephone
     */
    public function setCompany(Company $company)
    {
        $this->company = $company;

        return $this;
    }
}
