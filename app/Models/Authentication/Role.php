<?php

namespace Matican\Models\Authentication;

use Matican\Core\Concepts\CRUDActions;
use Matican\Models\Repository\Person;
use Matican\Core\DataTypes\DateTime;

class Role extends CRUDActions
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
     * @param DateTime
     */
    private $create_date;

    /**
     * @param Person
     */
    private $create_user;

    /**
     * @param Client
     */
    private $clients;

    /**
     * @param Permission
     */
    private $permissions;

    /**
     * @param RoleStatus
     */
    private $roleStatus;

    /**
     * @param User
     */
    private $users;

    public function __construct()
    {
        $this->clients = [];
        $this->permissions = [];
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
     * @return Role
     */
    public function setName($name)
    {
        $this->name = $name;

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
     * @return Role
     */
    public function setCreateDate(DateTime $create_date)
    {
        $this->create_date = $create_date;

        return $this;
    }

    /**
     * @return Person
     */
    public function getCreateUser()
    {
        return $this->create_user;
    }

    /**
     * @param Person $create_user
     * @return Role
     */
    public function setCreateUser(Person $create_user)
    {
        $this->create_user = $create_user;

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
     * @return Permission[]
     */
    public function getPermissions()
    {
        return $this->permissions;
    }


    /**
     * @return RoleStatus
     */
    public function getRoleStatus()
    {
        return $this->roleStatus;
    }

    /**
     * @param RoleStatus $roleStatus
     * @return Role
     */
    public function setRoleStatus(RoleStatus $roleStatus)
    {
        $this->roleStatus = $roleStatus;

        return $this;
    }

    /**
     * @return User[]
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param $machineName
     * @return string
     */
    public function changeRoleStatus($machineName)
    {
        return "";
    }

    public function addPermission()
    {
        return "";
    }

    public function removePermission()
    {
        return "";
    }
}
