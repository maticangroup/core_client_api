<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/7/2019
 * Time: 11:56 AM
 */

namespace App\FormModels\Inventory;


class InventoryModel
{
    private $inventoryId;
    private $inventoryName;
    private $inventoryKeeperId;
    private $inventoryKeeperName;
    private $inventoryKeeperPhone;
    private $inventoryAddress;
    private $inventoryMainPhone;
    private $inventoryPhones;
    private $inventoryLocation;
    private $inventoryLocationContactPersonId;
    private $inventoryItemProducts;
    private $inventoryDeeds;
    private $inventoryStatus;
    private $inventoryMachineName;

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

    /**
     * @return mixed
     */
    public function getInventoryName()
    {
        return $this->inventoryName;
    }

    /**
     * @param mixed $inventoryName
     */
    public function setInventoryName($inventoryName): void
    {
        $this->inventoryName = $inventoryName;
    }

    /**
     * @return mixed
     */
    public function getInventoryKeeperId()
    {
        return $this->inventoryKeeperId;
    }

    /**
     * @param mixed $inventoryKeeperId
     */
    public function setInventoryKeeperId($inventoryKeeperId): void
    {
        $this->inventoryKeeperId = $inventoryKeeperId;
    }

    /**
     * @return mixed
     */
    public function getInventoryKeeperName()
    {
        return $this->inventoryKeeperName;
    }

    /**
     * @param mixed $inventoryKeeperName
     */
    public function setInventoryKeeperName($inventoryKeeperName): void
    {
        $this->inventoryKeeperName = $inventoryKeeperName;
    }

    /**
     * @return mixed
     */
    public function getInventoryKeeperPhone()
    {
        return $this->inventoryKeeperPhone;
    }

    /**
     * @param mixed $inventoryKeeperPhone
     */
    public function setInventoryKeeperPhone($inventoryKeeperPhone): void
    {
        $this->inventoryKeeperPhone = $inventoryKeeperPhone;
    }

    /**
     * @return mixed
     */
    public function getInventoryAddress()
    {
        return $this->inventoryAddress;
    }

    /**
     * @param mixed $inventoryAddress
     */
    public function setInventoryAddress($inventoryAddress): void
    {
        $this->inventoryAddress = $inventoryAddress;
    }

    /**
     * @return mixed
     */
    public function getInventoryMainPhone()
    {
        return $this->inventoryMainPhone;
    }

    /**
     * @param mixed $inventoryMainPhone
     */
    public function setInventoryMainPhone($inventoryMainPhone): void
    {
        $this->inventoryMainPhone = $inventoryMainPhone;
    }

    /**
     * @return mixed
     */
    public function getInventoryPhones()
    {
        return $this->inventoryPhones;
    }

    /**
     * @param mixed $inventoryPhones
     */
    public function setInventoryPhones($inventoryPhones): void
    {
        $this->inventoryPhones = $inventoryPhones;
    }

    /**
     * @return mixed
     */
    public function getInventoryLocation()
    {
        return $this->inventoryLocation;
    }

    /**
     * @param mixed $inventoryLocation
     */
    public function setInventoryLocation($inventoryLocation): void
    {
        $this->inventoryLocation = $inventoryLocation;
    }

    /**
     * @return mixed
     */
    public function getInventoryItemProducts()
    {
        return $this->inventoryItemProducts;
    }

    /**
     * @param mixed $inventoryItemProducts
     */
    public function setInventoryItemProducts($inventoryItemProducts): void
    {
        $this->inventoryItemProducts = $inventoryItemProducts;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeeds()
    {
        return $this->inventoryDeeds;
    }

    /**
     * @param mixed $inventoryDeeds
     */
    public function setInventoryDeeds($inventoryDeeds): void
    {
        $this->inventoryDeeds = $inventoryDeeds;
    }

    /**
     * @return mixed
     */
    public function getInventoryStatus()
    {
        return $this->inventoryStatus;
    }

    /**
     * @param mixed $inventoryStatus
     */
    public function setInventoryStatus($inventoryStatus): void
    {
        $this->inventoryStatus = $inventoryStatus;
    }

    /**
     * @return mixed
     */
    public function getInventoryMachineName()
    {
        return $this->inventoryMachineName;
    }

    /**
     * @param mixed $inventoryMachineName
     */
    public function setInventoryMachineName($inventoryMachineName): void
    {
        $this->inventoryMachineName = $inventoryMachineName;
    }

    /**
     * @return mixed
     */
    public function getInventoryLocationContactPersonId()
    {
        return $this->inventoryLocationContactPersonId;
    }

    /**
     * @param mixed $inventoryLocationContactPersonId
     */
    public function setInventoryLocationContactPersonId($inventoryLocationContactPersonId): void
    {
        $this->inventoryLocationContactPersonId = $inventoryLocationContactPersonId;
    }
}