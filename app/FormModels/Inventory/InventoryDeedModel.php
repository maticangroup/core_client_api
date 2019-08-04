<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/7/2019
 * Time: 2:29 PM
 */

namespace Matican\FormModels\Inventory;


class InventoryDeedModel
{
    private $inventoryDeedId;
    private $inventoryDeedName;
    private $inventoryDeedSerial;
    private $inventoryDeedFromId;
    private $inventoryDeedFromShelveName;
    private $inventoryDeedFromShelveId;
    private $inventoryDeedToShelveId;
    private $inventoryDeedToShelveName;
    private $inventoryDeedFromInventoryName;
    private $inventoryDeedFromInventoryId;
    private $inventoryDeedToInventoryId;
    private $inventoryDeedToInventoryName;
    private $inventoryDeedToInventoryMachineName;
    private $inventoryDeedFromQueueId;
    private $inventoryDeedFromQueueName;
    private $inventoryDeedToQueueId;
    private $inventoryDeedToQueueName;
    private $inventoryDeedDescription;
    private $inventoryDeedCreateDate;
    private $inventoryDeedStatus;
    private $inventoryDeedProducts;
    private $inventoryDeedConfirmDate;
    private $inventoryDeedCreatePerson;
    private $inventoryDeedConfirmPerson;
    private $inventoryDeedTotalPrice;
    private $inventoryDeedTotalCount;
    private $inventoryDeedIsTransfer = true;

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

    /**
     * @return mixed
     */
    public function getInventoryDeedName()
    {
        return $this->inventoryDeedName;
    }

    /**
     * @param mixed $inventoryDeedName
     */
    public function setInventoryDeedName($inventoryDeedName): void
    {
        $this->inventoryDeedName = $inventoryDeedName;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedSerial()
    {
        return $this->inventoryDeedSerial;
    }

    /**
     * @param mixed $inventoryDeedSerial
     */
    public function setInventoryDeedSerial($inventoryDeedSerial): void
    {
        $this->inventoryDeedSerial = $inventoryDeedSerial;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedFromId()
    {
        return $this->inventoryDeedFromId;
    }

    /**
     * @param mixed $inventoryDeedFromId
     */
    public function setInventoryDeedFromId($inventoryDeedFromId): void
    {
        $this->inventoryDeedFromId = $inventoryDeedFromId;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedFromShelveName()
    {
        return $this->inventoryDeedFromShelveName;
    }

    /**
     * @param mixed $inventoryDeedFromShelveName
     */
    public function setInventoryDeedFromShelveName($inventoryDeedFromShelveName): void
    {
        $this->inventoryDeedFromShelveName = $inventoryDeedFromShelveName;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedFromShelveId()
    {
        return $this->inventoryDeedFromShelveId;
    }

    /**
     * @param mixed $inventoryDeedFromShelveId
     */
    public function setInventoryDeedFromShelveId($inventoryDeedFromShelveId): void
    {
        $this->inventoryDeedFromShelveId = $inventoryDeedFromShelveId;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedToShelveId()
    {
        return $this->inventoryDeedToShelveId;
    }

    /**
     * @param mixed $inventoryDeedToShelveId
     */
    public function setInventoryDeedToShelveId($inventoryDeedToShelveId): void
    {
        $this->inventoryDeedToShelveId = $inventoryDeedToShelveId;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedToShelveName()
    {
        return $this->inventoryDeedToShelveName;
    }

    /**
     * @param mixed $inventoryDeedToShelveName
     */
    public function setInventoryDeedToShelveName($inventoryDeedToShelveName): void
    {
        $this->inventoryDeedToShelveName = $inventoryDeedToShelveName;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedFromInventoryName()
    {
        return $this->inventoryDeedFromInventoryName;
    }

    /**
     * @param mixed $inventoryDeedFromInventoryName
     */
    public function setInventoryDeedFromInventoryName($inventoryDeedFromInventoryName): void
    {
        $this->inventoryDeedFromInventoryName = $inventoryDeedFromInventoryName;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedFromInventoryId()
    {
        return $this->inventoryDeedFromInventoryId;
    }

    /**
     * @param mixed $inventoryDeedFromInventoryId
     */
    public function setInventoryDeedFromInventoryId($inventoryDeedFromInventoryId): void
    {
        $this->inventoryDeedFromInventoryId = $inventoryDeedFromInventoryId;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedToInventoryId()
    {
        return $this->inventoryDeedToInventoryId;
    }

    /**
     * @param mixed $inventoryDeedToInventoryId
     */
    public function setInventoryDeedToInventoryId($inventoryDeedToInventoryId): void
    {
        $this->inventoryDeedToInventoryId = $inventoryDeedToInventoryId;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedToInventoryName()
    {
        return $this->inventoryDeedToInventoryName;
    }

    /**
     * @param mixed $inventoryDeedToInventoryName
     */
    public function setInventoryDeedToInventoryName($inventoryDeedToInventoryName): void
    {
        $this->inventoryDeedToInventoryName = $inventoryDeedToInventoryName;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedToInventoryMachineName()
    {
        return $this->inventoryDeedToInventoryMachineName;
    }

    /**
     * @param mixed $inventoryDeedToInventoryMachineName
     */
    public function setInventoryDeedToInventoryMachineName($inventoryDeedToInventoryMachineName): void
    {
        $this->inventoryDeedToInventoryMachineName = $inventoryDeedToInventoryMachineName;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedFromQueueId()
    {
        return $this->inventoryDeedFromQueueId;
    }

    /**
     * @param mixed $inventoryDeedFromQueueId
     */
    public function setInventoryDeedFromQueueId($inventoryDeedFromQueueId): void
    {
        $this->inventoryDeedFromQueueId = $inventoryDeedFromQueueId;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedFromQueueName()
    {
        return $this->inventoryDeedFromQueueName;
    }

    /**
     * @param mixed $inventoryDeedFromQueueName
     */
    public function setInventoryDeedFromQueueName($inventoryDeedFromQueueName): void
    {
        $this->inventoryDeedFromQueueName = $inventoryDeedFromQueueName;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedToQueueId()
    {
        return $this->inventoryDeedToQueueId;
    }

    /**
     * @param mixed $inventoryDeedToQueueId
     */
    public function setInventoryDeedToQueueId($inventoryDeedToQueueId): void
    {
        $this->inventoryDeedToQueueId = $inventoryDeedToQueueId;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedToQueueName()
    {
        return $this->inventoryDeedToQueueName;
    }

    /**
     * @param mixed $inventoryDeedToQueueName
     */
    public function setInventoryDeedToQueueName($inventoryDeedToQueueName): void
    {
        $this->inventoryDeedToQueueName = $inventoryDeedToQueueName;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedDescription()
    {
        return $this->inventoryDeedDescription;
    }

    /**
     * @param mixed $inventoryDeedDescription
     */
    public function setInventoryDeedDescription($inventoryDeedDescription): void
    {
        $this->inventoryDeedDescription = $inventoryDeedDescription;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedCreateDate()
    {
        return $this->inventoryDeedCreateDate;
    }

    /**
     * @param mixed $inventoryDeedCreateDate
     */
    public function setInventoryDeedCreateDate($inventoryDeedCreateDate): void
    {
        $this->inventoryDeedCreateDate = $inventoryDeedCreateDate;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedStatus()
    {
        return $this->inventoryDeedStatus;
    }

    /**
     * @param mixed $inventoryDeedStatus
     */
    public function setInventoryDeedStatus($inventoryDeedStatus): void
    {
        $this->inventoryDeedStatus = $inventoryDeedStatus;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedProducts()
    {
        return $this->inventoryDeedProducts;
    }

    /**
     * @param mixed $inventoryDeedProducts
     */
    public function setInventoryDeedProducts($inventoryDeedProducts): void
    {
        $this->inventoryDeedProducts = $inventoryDeedProducts;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedConfirmDate()
    {
        return $this->inventoryDeedConfirmDate;
    }

    /**
     * @param mixed $inventoryDeedConfirmDate
     */
    public function setInventoryDeedConfirmDate($inventoryDeedConfirmDate): void
    {
        $this->inventoryDeedConfirmDate = $inventoryDeedConfirmDate;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedCreatePerson()
    {
        return $this->inventoryDeedCreatePerson;
    }

    /**
     * @param mixed $inventoryDeedCreatePerson
     */
    public function setInventoryDeedCreatePerson($inventoryDeedCreatePerson): void
    {
        $this->inventoryDeedCreatePerson = $inventoryDeedCreatePerson;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedConfirmPerson()
    {
        return $this->inventoryDeedConfirmPerson;
    }

    /**
     * @param mixed $inventoryDeedConfirmPerson
     */
    public function setInventoryDeedConfirmPerson($inventoryDeedConfirmPerson): void
    {
        $this->inventoryDeedConfirmPerson = $inventoryDeedConfirmPerson;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedTotalPrice()
    {
        return $this->inventoryDeedTotalPrice;
    }

    /**
     * @param mixed $inventoryDeedTotalPrice
     */
    public function setInventoryDeedTotalPrice($inventoryDeedTotalPrice): void
    {
        $this->inventoryDeedTotalPrice = $inventoryDeedTotalPrice;
    }

    /**
     * @return mixed
     */
    public function getInventoryDeedTotalCount()
    {
        return $this->inventoryDeedTotalCount;
    }

    /**
     * @param mixed $inventoryDeedTotalCount
     */
    public function setInventoryDeedTotalCount($inventoryDeedTotalCount): void
    {
        $this->inventoryDeedTotalCount = $inventoryDeedTotalCount;
    }

    /**
     * @return bool
     */
    public function getInventoryDeedIsTransfer(): bool
    {
        return $this->inventoryDeedIsTransfer;
    }

    /**
     * @param bool $inventoryDeedIsTransfer
     */
    public function setInventoryDeedIsTransfer(bool $inventoryDeedIsTransfer): void
    {
        $this->inventoryDeedIsTransfer = $inventoryDeedIsTransfer;
    }
}