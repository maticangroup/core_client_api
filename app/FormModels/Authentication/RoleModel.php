<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/20/2019
 * Time: 4:40 PM
 */

namespace Matican\FormModels\Authentication;


class RoleModel
{
    private $roleId;
    private $roleName;
    private $rolePermissions;
    private $rolePersonId;
    private $userId;

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
    public function getRolePermissions()
    {
        return $this->rolePermissions;
    }

    /**
     * @param mixed $rolePermissions
     */
    public function setRolePermissions($rolePermissions): void
    {
        $this->rolePermissions = $rolePermissions;
    }

    /**
     * @return mixed
     */
    public function getRolePersonId()
    {
        return $this->rolePersonId;
    }

    /**
     * @param mixed $rolePersonId
     */
    public function setRolePersonId($rolePersonId): void
    {
        $this->rolePersonId = $rolePersonId;
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