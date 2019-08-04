<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/1/2019
 * Time: 6:09 PM
 */

namespace Matican\FormModels\Repository;


class ItemColorModel
{
    private $itemColorID;
    private $itemColorName;
    private $itemColorHex;
    private $itemColorStatus;
    private $itemId;

    /**
     * @return mixed
     */
    public function getItemColorID()
    {
        return $this->itemColorID;
    }

    /**
     * @param mixed $itemColorID
     */
    public function setItemColorID($itemColorID): void
    {
        $this->itemColorID = $itemColorID;
    }

    /**
     * @return mixed
     */
    public function getItemColorName()
    {
        return $this->itemColorName;
    }

    /**
     * @param mixed $itemColorName
     */
    public function setItemColorName($itemColorName): void
    {
        $this->itemColorName = $itemColorName;
    }

    /**
     * @return mixed
     */
    public function getItemColorHex()
    {
        return $this->itemColorHex;
    }

    /**
     * @param mixed $itemColorHex
     */
    public function setItemColorHex($itemColorHex): void
    {
        $this->itemColorHex = $itemColorHex;
    }

    /**
     * @return mixed
     */
    public function getItemColorStatus()
    {
        return $this->itemColorStatus;
    }

    /**
     * @param mixed $itemColorStatus
     */
    public function setItemColorStatus($itemColorStatus): void
    {
        $this->itemColorStatus = $itemColorStatus;
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