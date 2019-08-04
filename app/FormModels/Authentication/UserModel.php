<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/18/2019
 * Time: 11:31 AM
 */

namespace Matican\FormModels\Authentication;


class UserModel
{
    private $userId;
    private $userMobile;
    private $userPassword;
    private $userName;
    private $userFamily;
    private $userIsLogIn;
    private $userLoginDate;
    private $roleId;
    private $roleName;
    private $authenticationStatus;

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getUserMobile()
    {
        return $this->userMobile;
    }

    /**
     * @param mixed $userMobile
     */
    public function setUserMobile($userMobile): void
    {
        $this->userMobile = $userMobile;
    }

    /**
     * @return mixed
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * @param mixed $userPassword
     */
    public function setUserPassword($userPassword): void
    {
        $this->userPassword = $userPassword;
    }

    /**
     * @return mixed
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * @param mixed $roleId
     */
    public function setRoleId($roleId): void
    {
        $this->roleId = $roleId;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($userName): void
    {
        $this->userName = $userName;
    }

    /**
     * @return mixed
     */
    public function getUserFamily()
    {
        return $this->userFamily;
    }

    /**
     * @param mixed $userFamily
     */
    public function setUserFamily($userFamily): void
    {
        $this->userFamily = $userFamily;
    }

    /**
     * @return mixed
     */
    public function getUserIsLogIn()
    {
        return $this->userIsLogIn;
    }

    /**
     * @param mixed $userIsLogIn
     */
    public function setUserIsLogIn($userIsLogIn): void
    {
        $this->userIsLogIn = $userIsLogIn;
    }

    /**
     * @return mixed
     */
    public function getUserLoginDate()
    {
        return $this->userLoginDate;
    }

    /**
     * @param mixed $userLoginDate
     */
    public function setUserLoginDate($userLoginDate): void
    {
        $this->userLoginDate = $userLoginDate;
    }

    /**
     * @return mixed
     */
    public function getRoleName()
    {
        return $this->roleName;
    }

    /**
     * @param mixed $roleName
     */
    public function setRoleName($roleName): void
    {
        $this->roleName = $roleName;
    }

    /**
     * @return mixed
     */
    public function getAuthenticationStatus()
    {
        return $this->authenticationStatus;
    }

    /**
     * @param mixed $authenticationStatus
     */
    public function setAuthenticationStatus($authenticationStatus): void
    {
        $this->authenticationStatus = $authenticationStatus;
    }
}