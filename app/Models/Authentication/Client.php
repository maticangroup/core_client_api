<?php

namespace App\Models\Authentication;

use App\Core\Concepts\CRUDActions;
use App\Core\DataTypes\DateTime;
use App\Core\DataTypes\Hash;
use App\Core\DataTypes\IP;
use App\Models\Repository\Person;

class Client extends CRUDActions
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
     * @param IP
     */
    private $ip;

    /**
     * @param Hash
     */
    private $access_token;

    /**
     * @param Hash
     */
    private $public_key;

    /**
     * @param Hash
     */
    private $secret_key;

    /**
     * @param DateTime
     */
    private $last_connection_date;

    /**
     * @param AuthenticationStatus
     */
    private $authentication_status;

    /**
     * @param ClientStatus
     */
    private $status;

    /**
     * @param Role
     */
    private $role;

    /**
     * @param Person
     */
    private $owner;

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
     * @return Client
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return IP
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param IP $ip
     * @return Client
     */
    public function setIp(IP $ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * @return Hash
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }

    /**
     * @param Hash $access_token
     * @return Client
     */
    public function setAccessToken(Hash $access_token)
    {
        $this->access_token = $access_token;

        return $this;
    }

    /**
     * @return Hash
     */
    public function getPublicKey()
    {
        return $this->public_key;
    }

    /**
     * @param Hash $public_key
     * @return Client
     */
    public function setPublicKey(Hash $public_key)
    {
        $this->public_key = $public_key;

        return $this;
    }

    /**
     * @return Hash
     */
    public function getSecretKey()
    {
        return $this->secret_key;
    }

    /**
     * @param Hash $secret_key
     * @return Client
     */
    public function setSecretKey(Hash $secret_key)
    {
        $this->secret_key = $secret_key;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getLastConnectionDate()
    {
        return $this->last_connection_date;
    }

    /**
     * @param DateTime $last_connection_date
     * @return Client
     */
    public function setLastConnectionDate(DateTime $last_connection_date)
    {
        $this->last_connection_date = $last_connection_date;

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
     * @return Client
     */
    public function setAuthenticationStatus(AuthenticationStatus $authentication_status)
    {
        $this->authentication_status = $authentication_status;

        return $this;
    }

    /**
     * @return ClientStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param ClientStatus $status
     * @return $this
     */
    public function setStatus(ClientStatus $status)
    {
        $this->status = $status;

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
     * @return Client
     */
    public function setRole(Role $role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * @return Person
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param Person $owner
     */
    public function setOwner(Person $owner)
    {
        $this->owner = $owner;
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
    public function changeClientStatus($machineName)
    {
        return "";
    }
}
