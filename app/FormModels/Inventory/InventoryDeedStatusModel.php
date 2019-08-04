<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/8/2019
 * Time: 3:47 PM
 */

namespace App\FormModels\Inventory;


class InventoryDeedStatusModel
{
    private $inventoryDeedStatusId;
    private $inventoryDeedStatusName;
    private $inventoryDeedStatusMachineName;
    private $inventoryDeedStatusColor;
    private $inventoryDeedId;

    /**
     * @return mixed
     */
    public function getInventoryDeedStatusId()
    {
        return $this->inventoryDeedStatusId;
    }

    /**
     * @param mixed $inventoryDeedStatusId
     */
    public function setInventoryDeedStatusId($inventoryDeedStatusId): void
    {
        $this->inventoryDeedStatusId = $inventoryDeedStatusId;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedStatusName()
    {
        return $this->inventoryDeedStatusName;
    }

    /**
     * @param mixed $inventoryDeedStatusName
     */
    public function setInventoryDeedStatusName($inventoryDeedStatusName): void
    {
        $this->inventoryDeedStatusName = $inventoryDeedStatusName;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedStatusMachineName()
    {
        return $this->inventoryDeedStatusMachineName;
    }

    /**
     * @param mixed $inventoryDeedStatusMachineName
     */
    public function setInventoryDeedStatusMachineName($inventoryDeedStatusMachineName): void
    {
        $this->inventoryDeedStatusMachineName = $inventoryDeedStatusMachineName;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedStatusColor()
    {
        return $this->inventoryDeedStatusColor;
    }

    /**
     * @param mixed $inventoryDeedStatusColor
     */
    public function setInventoryDeedStatusColor($inventoryDeedStatusColor): void
    {
        $this->inventoryDeedStatusColor = $inventoryDeedStatusColor;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedId()
    {
        return $this->inventoryDeedId;
    }

    /**
     * @param mixed $inventoryDeedId
     */
    public function setInventoryDeedId($inventoryDeedId): void
    {
        $this->inventoryDeedId = $inventoryDeedId;
    }
}