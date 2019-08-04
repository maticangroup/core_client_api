<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/7/2019
 * Time: 2:01 PM
 */

namespace Matican\FormModels\Inventory;


class ShelveStatusModel
{
    private $shelveStatusId;
    private $shelveStatusName;
    private $shelveStatusMachineName;
    private $shelveStatusColor;
    private $shelveId;

    /**
     * @return mixed
     */
    public function getShelveStatusId()
    {
        return $this->shelveStatusId;
    }

    /**
     * @param mixed $shelveStatusId
     */
    public function setShelveStatusId($shelveStatusId): void
    {
        $this->shelveStatusId = $shelveStatusId;
    }

    /**
     * @return mixed
     */
    public function getShelveStatusName()
    {
        return $this->shelveStatusName;
    }

    /**
     * @param mixed $shelveStatusName
     */
    public function setShelveStatusName($shelveStatusName): void
    {
        $this->shelveStatusName = $shelveStatusName;
    }

    /**
     * @return mixed
     */
    public function getShelveStatusMachineName()
    {
        return $this->shelveStatusMachineName;
    }

    /**
     * @param mixed $shelveStatusMachineName
     */
    public function setShelveStatusMachineName($shelveStatusMachineName): void
    {
        $this->shelveStatusMachineName = $shelveStatusMachineName;
    }

    /**
     * @return mixed
     */
    public function getShelveStatusColor()
    {
        return $this->shelveStatusColor;
    }

    /**
     * @param mixed $shelveStatusColor
     */
    public function setShelveStatusColor($shelveStatusColor): void
    {
        $this->shelveStatusColor = $shelveStatusColor;
    }

    /**
     * @return mixed
     */
    public function getShelveId()
    {
        return $this->shelveId;
    }

    /**
     * @param mixed $shelveId
     */
    public function setShelveId($shelveId): void
    {
        $this->shelveId = $shelveId;
    }
}