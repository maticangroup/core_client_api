<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/20/2019
 * Time: 6:10 PM
 */

namespace Matican\FormModels\Authentication;


class PermissionModel
{
    private $permissionId;
    private $permissionName;
    private $permissionMachineName;
    private $permissionServerName;
    private $permissionServerId;
    private $roleId;
    private $permissionIsDisabled;

    /**
     * @return mixed
     */
    public function getPermissionId()
    {
        return $this->permissionId;
    }

    /**
     * @param mixed $permissionId
     */
    public function setPermissionId($permissionId): void
    {
        $this->permissionId = $permissionId;
    }

    /**
     * @return mixed
     */
    public function getPermissionName()
    {
        return $this->permissionName;
    }

    /**
     * @param mixed $permissionName
     */
    public function setPermissionName($permissionName): void
    {
        $this->permissionName = $permissionName;
    }

    /**
     * @return mixed
     */
    public function getPermissionServerName()
    {
        return $this->permissionServerName;
    }

    /**
     * @param mixed $permissionServerName
     */
    public function setPermissionServerName($permissionServerName): void
    {
        $this->permissionServerName = $permissionServerName;
    }

    /**
     * @return mixed
     */
    public function getPermissionServerId()
    {
        return $this->permissionServerId;
    }

    /**
     * @param mixed $permissionServerId
     */
    public function setPermissionServerId($permissionServerId): void
    {
        $this->permissionServerId = $permissionServerId;
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
    public function getPermissionMachineName()
    {
        return $this->permissionMachineName;
    }

    /**
     * @param mixed $permissionMachineName
     */
    public function setPermissionMachineName($permissionMachineName): void
    {
        $this->permissionMachineName = $permissionMachineName;
    }

    /**
     * @return mixed
     */
    public function getPermissionIsDisabled()
    {
        return $this->permissionIsDisabled;
    }

    /**
     * @param mixed $permissionIsDisabled
     */
    public function setPermissionIsDisabled($permissionIsDisabled): void
    {
        $this->permissionIsDisabled = $permissionIsDisabled;
    }
}