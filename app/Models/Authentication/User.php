<?php

namespace Matican\Models\Authentication;

use Matican\Core\Concepts\CRUDActions;
use Matican\Models\Repository\Person;
use Matican\Core\DataTypes\DateTime;
use Matican\Core\DataTypes\Hash;
use Matican\Core\DataTypes\Mobile;

class User extends CRUDActions
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
     * @param Person
     */
    private $person;

    /**
     * @param Hash
     */
    private $current_password;

    /**
     * @param DateTime
     */
    private $last_login_date;

    /**
     * @param DateTime
     */
    private $create_date;

    /**
     * @param Mobile
     */
    private $mobile;

    /**
     * @param AuthenticationStatus
     */
    private $authentication_status;

    /**
     * @param Role
     */
    private $role;

    /**
     * @param UserStatus
     */
    private $userStatus;

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
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Person
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * @param Person $person
     * @return User
     */
    public function setPerson(Person $person)
    {
        $this->person = $person;

        return $this;
    }

    /**
     * @return Hash
     */
    public function getCurrentPassword()
    {
        return $this->current_password;
    }

    /**
     * @param Hash $current_password
     * @return User
     */
    public function setCurrentPassword(Hash $current_password)
    {
        $this->current_password = $current_password;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getLastLoginDate()
    {
        return $this->last_login_date;
    }

    /**
     * @param DateTime $last_login_date
     * @return User
     */
    public function setLastLoginDate(DateTime $last_login_date)
    {
        $this->last_login_date = $last_login_date;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreateDate()
    {
        return $this->create_date;
    }

    /**
     * @param DateTime $create_date
     * @return User
     */
    public function setCreateDate(DateTime $create_date)
    {
        $this->create_date = $create_date;

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
     * @return User
     */
    public function setMobile(Mobile $mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * @return AuthenticationStatus
     */
    public function getAuthenticationStatus()
    {
        return $this->authentication_status;
    }

    /**
     * @param AuthenticationStatus $authentication_status
     * @return $this
     */
    public function setAuthenticationStatus(AuthenticationStatus $authentication_status)
    {
        $this->authentication_status = $authentication_status;

        return $this;
    }

    /**
     * @return Role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param Role $role
     * @return $this
     */
    public function setRole(Role $role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * @return UserStatus
     */
    public function getUserStatus()
    {
        return $this->userStatus;
    }

    /**
     * @param UserStatus $userStatus
     * @return $this
     */
    public function setUserStatus(UserStatus $userStatus)
    {
        $this->userStatus = $userStatus;

        return $this;
    }

    /**
     * @param $machineName
     * @return string
     */
    public function changeAuthenticationStatus($machineName)
    {
        return "";
    }

    /**
     * @param $machineName
     * @return string
     */
    public function changeUserStatus($machineName)
    {
        return "";
    }

    /**
     * @param $mobile
     * @return string
     */
    public function getMobileVerifyCode($mobile)
    {
        return "";
    }

    /**
     * @param $mobileVerifyCode
     * @return string
     */
    public function login($mobileVerifyCode)
    {
        return "";
    }

    /**
     * @return string
     */
    public function logOut()
    {
        return "";
    }
}
