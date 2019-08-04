<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/7/2019
 * Time: 11:59 AM
 */

namespace App\FormModels\Inventory;


class InventoryStatusModel
{
    private $inventoryStatusId;
    private $inventoryStatusName;
    private $inventoryStatusMachineName;
    private $inventoryStatusColor;
    private $inventoryId;

    /**
     * @return mixed
     */
    public function getInventoryStatusId()
    {
        return $this->inventoryStatusId;
    }

    /**
     * @param mixed $inventoryStatusId
     */
    public function setInventoryStatusId($inventoryStatusId): void
    {
        $this->inventoryStatusId = $inventoryStatusId;
    }

    /**
     * @return mixed
     */
    public function getInventoryStatusName()
    {
        return $this->inventoryStatusName;
    }

    /**
     * @param mixed $inventoryStatusName
     */
    public function setInventoryStatusName($inventoryStatusName): void
    {
        $this->inventoryStatusName = $inventoryStatusName;
    }

    /**
     * @return mixed
     */
    public function getInventoryStatusMachineName()
    {
        return $this->inventoryStatusMachineName;
    }

    /**
     * @param mixed $inventoryStatusMachineName
     */
    public function setInventoryStatusMachineName($inventoryStatusMachineName): void
    {
        $this->inventoryStatusMachineName = $inventoryStatusMachineName;
    }

    /**
     * @return mixed
     */
    public function getInventoryStatusColor()
    {
        return $this->inventoryStatusColor;
    }

    /**
     * @param mixed $inventoryStatusColor
     */
    public function setInventoryStatusColor($inventoryStatusColor): void
    {
        $this->inventoryStatusColor = $inventoryStatusColor;
    }

    /**
     * @return mixed
     */
    public function getInventoryId()
    {
        return $this->inventoryId;
    }

    /**
     * @param mixed $inventoryId
     */
    public function setInventoryId($inventoryId): void
    {
        $this->inventoryId = $inventoryId;
    }
}