<?php

namespace Matican\Models\Authentication;


use Matican\Core\Concepts\CRUDActions;
use Matican\Core\DataTypes\URL;

class Permission extends CRUDActions
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
     * @param URL
     */
    private $url;

    /**
     * @param PermissionStatus
     */
    private $permissionStatus;

    /**
     * @param Role
     */
    private $roles;

    /**
     * @param PermissionGroup
     */
    private $permissionGroup;

    public function __construct()
    {
        $this->roles = [];
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
     * @return Permission
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return URL
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param URL $url
     * @return Permission
     */
    public function setUrl(URL $url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return PermissionStatus
     */
    public function getPermissionStatus()
    {
        return $this->permissionStatus;
    }

    /**
     * @param PermissionStatus $permissionStatus
     * @return Permission
     */
    public function setPermissionStatus(PermissionStatus $permissionStatus)
    {
        $this->permissionStatus = $permissionStatus;

        return $this;
    }

    /**
     * @return Role[]
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @return PermissionGroup
     */
    public function getPermissionGroup()
    {
        return $this->permissionGroup;
    }

    /**
     * @param PermissionGroup $permissionGroup
     * @return $this
     */
    public function setPermissionGroup(PermissionGroup $permissionGroup)
    {
        $this->permissionGroup = $permissionGroup;

        return $this;
    }

    /**
     * @param $machineName
     * @return string
     */
    public function changePermissionStatus($machineName)
    {
        return "";
    }
}
