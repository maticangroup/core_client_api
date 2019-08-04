<?php

namespace Matican\Models\Repository;


use Matican\Core\Concepts\CRUDActions;
use Matican\Core\DataTypes\Date;
use Matican\Core\DataTypes\Email;
use Matican\Core\DataTypes\Mobile;
use Matican\Core\DataTypes\NationalCode;
use Matican\Core\DataTypes\Text;
use Matican\Models\Accounting\CouponGroup;
use Matican\Models\Accounting\CouponUsage;
use Matican\Models\Accounting\UserCreditBalance;
use Matican\Models\Authentication\Client;
use Matican\Models\CRM\CustomerGroup;

class Person extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param string
     */
    private $humanName;

    /**
     * @param string
     */
    private $humanFamily;

    /**
     * @param Email
     */
    private $email;

    /**
     * @param Date
     */
    private $birth_date;

    /**
     * @param NationalCode
     */
    private $national_code;

    /**
     * @param Mobile
     */
    private $mobile;


    public function __construct()
    {

    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param Email $email
     * @return Person
     */
    public function setEmail(Email $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return Date
     */
    public function getBirthDate()
    {
        return $this->birth_date;
    }

    /**
     * @param Date $birth_date
     * @return Person
     */
    public function setBirthDate(Date $birth_date)
    {
        $this->birth_date = $birth_date;

        return $this;
    }

    /**
     * @return NationalCode
     */
    public function getNationalCode()
    {
        return $this->national_code;
    }

    /**
     * @param NationalCode $national_code
     * @return Person
     */
    public function setNationalCode(NationalCode $national_code)
    {
        $this->national_code = $national_code;

        return $this;
    }

    /**
     * @return Mobile
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param Mobile $mobile
     * @return Person
     */
    public function setMobile(Mobile $mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * @return string
     */
    public function getHumanName()
    {
        return $this->humanName;
    }

    /**
     * @param string $humanName
     */
    public function setHumanName($humanName)
    {
        $this->humanName = $humanName;
    }

    /**
     * @return string
     */
    public function getHumanFamily()
    {
        return $this->humanFamily;
    }

    /**
     * @param string $humanFamily
     */
    public function setHumanFamily($humanFamily)
    {
        $this->humanFamily = $humanFamily;
    }

    /**
     * @return UserCreditBalance
     */
    public function getAccountBalance()
    {
//        return $this->account_balance;
    }

    /**
     * @return Item[]
     */
    public function getFavoriteProducts()
    {
//        return $this->favoriteProducts;
    }

    /**
     * @return CustomerGroup[]
     */
    public function getCustomerGroups()
    {
//        return $this->customer_groups;
    }

    /**
     * @return Location[]
     */
    public function getAddresses()
    {
//        return $this->addresses;
    }

    /**
     * @return Company[]
     */
    public function getRelatedCompanies()
    {
//        return $this->related_companies;
    }

    /**
     * @return CouponGroup[]
     */
    public function getCouponGroups()
    {
//        return $this->couponGroups;
    }

    /**
     * @return CouponUsage[]
     */
    public function getCouponUsages()
    {
//        return $this->couponUsages;
    }

    /**
     * @return Client[]
     */
    public function getClients()
    {
//        return $this->clients;
    }

}
