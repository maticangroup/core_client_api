<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/5/2019
 * Time: 4:36 PM
 */

namespace Matican\FormModels\Repository;


class ItemStatusModel
{
    private $itemStatusId;
    private $itemStatusName;
    private $itemStatusMachineName;
    private $itemStatusColor;
    private $itemId;

    /**
     * @return mixed
     */
    public function getItemStatusId()
    {
        return $this->itemStatusId;
    }

    /**
     * @param mixed $itemStatusId
     */
    public function setItemStatusId($itemStatusId): void
    {
        $this->itemStatusId = $itemStatusId;
    }

    /**
     * @return mixed
     */
    public function getItemStatusName()
    {
        return $this->itemStatusName;
    }

    /**
     * @param mixed $itemStatusName
     */
    public function setItemStatusName($itemStatusName): void
    {
        $this->itemStatusName = $itemStatusName;
    }

    /**
     * @return mixed
     */
    public function getItemStatusMachineName()
    {
        return $this->itemStatusMachineName;
    }

    /**
     * @param mixed $itemStatusMachineName
     */
    public function setItemStatusMachineName($itemStatusMachineName): void
    {
        $this->itemStatusMachineName = $itemStatusMachineName;
    }

    /**
     * @return mixed
     */
    public function getItemStatusColor()
    {
        return $this->itemStatusColor;
    }

    /**
     * @param mixed $itemStatusColor
     */
    public function setItemStatusColor($itemStatusColor): void
    {
        $this->itemStatusColor = $itemStatusColor;
    }

    /**
     * @return mixed
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param mixed $itemId
     */
    public function setItemId($itemId): void
    {
        $this->itemId = $itemId;
    }
}