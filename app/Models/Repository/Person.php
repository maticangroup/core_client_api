<?php

namespace App\Models\Repository;


use App\Core\Concepts\CRUDActions;
use App\Core\DataTypes\Date;
use App\Core\DataTypes\Email;
use App\Core\DataTypes\Mobile;
use App\Core\DataTypes\NationalCode;
use App\Core\DataTypes\Text;
use App\Models\Accounting\CouponGroup;
use App\Models\Accounting\CouponUsage;
use App\Models\Accounting\UserCreditBalance;
use App\Models\Authentication\Client;
use App\Models\CRM\CustomerGroup;

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
