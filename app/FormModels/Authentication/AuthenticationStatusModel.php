<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/21/2019
 * Time: 4:19 PM
 */

namespace App\FormModels\Authentication;


class AuthenticationStatusModel
{
    private $authenticationStatusId;
    private $authenticationStatusName;
    private $authenticationStatusMachineName;
    private $authenticationStatusColor;
    private $userId;

    /**
     * @return mixed
     */
    public function getAuthenticationStatusId()
    {
        return $this->authenticationStatusId;
    }

    /**
     * @param mixed $authenticationStatusId
     */
    public function setAuthenticationStatusId($authenticationStatusId): void
    {
        $this->authenticationStatusId = $authenticationStatusId;
    }

    /**
     * @return mixed
     */
    public function getAuthenticationStatusName()
    {
        return $this->authenticationStatusName;
    }

    /**
     * @param mixed $authenticationStatusName
     */
    public function setAuthenticationStatusName($authenticationStatusName): void
    {
        $this->authenticationStatusName = $authenticationStatusName;
    }

    /**
     * @return mixed
     */
    public function getAuthenticationStatusMachineName()
    {
        return $this->authenticationStatusMachineName;
    }

    /**
     * @param mixed $authenticationStatusMachineName
     */
    public function setAuthenticationStatusMachineName($authenticationStatusMachineName): void
    {
        $this->authenticationStatusMachineName = $authenticationStatusMachineName;
    }

    /**
     * @return mixed
     */
    public function getAuthenticationStatusColor()
    {
        return $this->authenticationStatusColor;
    }

    /**
     * @param mixed $authenticationStatusColor
     */
    public function setAuthenticationStatusColor($authenticationStatusColor): void
    {
        $this->authenticationStatusColor = $authenticationStatusColor;
    }

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
}