<?php

namespace App\Models\Authentication;


use App\Core\Concepts\CRUDActions;
use App\Core\DataTypes\MachineName;

class AuthenticationStatus extends CRUDActions
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
     * @param MachineName
     */
    private $machine_name;

    /**
     * @param Client
     */
    private $clients;

    /**
     * @param User
     */
    private $users;

    public function __construct()
    {
        $this->clients = [];
        $this->users = [];
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
     * @return AuthenticationStatus
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return MachineName
     */
    public function getMachineName()
    {
        return $this->machine_name;
    }

    /**
     * @param MachineName $machine_name
     * @return AuthenticationStatus
     */
    public function setMachineName(MachineName $machine_name)
    {
        $this->machine_name = $machine_name;

        return $this;
    }

    /**
     * @return Client[]
     */
    public function getClients()
    {
        return $this->clients;
    }

    /**
     * @return User[]
     */
    public function getUsers()
    {
        return $this->users;
    }
}
