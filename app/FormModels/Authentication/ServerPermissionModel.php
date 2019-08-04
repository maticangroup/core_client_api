<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/20/2019
 * Time: 6:00 PM
 */

namespace App\FormModels\Authentication;


class ServerPermissionModel
{
    private $serverPermissionId;
    private $serverPermissionName;
    private $serverPermissions;

    /**
     * @return mixed
     */
    public function getServerPermissionId()
    {
        return $this->serverPermissionId;
    }

    /**
     * @param mixed $serverPermissionId
     */
    public function setServerPermissionId($serverPermissionId): void
    {
        $this->serverPermissionId = $serverPermissionId;
    }

    /**
     * @return mixed
     */
    public function getServerPermissionName()
    {
        return $this->serverPermissionName;
    }

    /**
     * @param mixed $serverPermissionName
     */
    public function setServerPermissionName($serverPermissionName): void
    {
        $this->serverPermissionName = $serverPermissionName;
    }

    /**
     * @return mixed
     */
    public function getServerPermissions()
    {
        return $this->serverPermissions;
    }

    /**
     * @param mixed $serverPermissions
     */
    public function setServerPermissions($serverPermissions): void
    {
        $this->serverPermissions = $serverPermissions;
    }
}