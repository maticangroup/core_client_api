<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/1/2019
 * Time: 7:05 PM
 */

namespace Matican\FormModels\Repository;


class SizeModel
{
    private $sizeID;
    private $sizeName;
    private $sizeWidth;
    private $sizeLength;
    private $sizeDepth;
    private $sizeOrder;
    private $sizeStatus;
    private $itemCategoryId;
    private $deliveryMethodId;

    /**
     * @return mixed
     */
    public function getSizeID()
    {
        return $this->sizeID;
    }

    /**
     * @param mixed $sizeID
     */
    public function setSizeID($sizeID): void
    {
        $this->sizeID = $sizeID;
    }

    /**
     * @return mixed
     */
    public function getSizeName()
    {
        return $this->sizeName;
    }

    /**
     * @param mixed $sizeName
     */
    public function setSizeName($sizeName): void
    {
        $this->sizeName = $sizeName;
    }

    /**
     * @return mixed
     */
    public function getSizeWidth()
    {
        return $this->sizeWidth;
    }

    /**
     * @param mixed $sizeWidth
     */
    public function setSizeWidth($sizeWidth): void
    {
        $this->sizeWidth = $sizeWidth;
    }

    /**
     * @return mixed
     */
    public function getSizeLength()
    {
        return $this->sizeLength;
    }

    /**
     * @param mixed $sizeLength
     */
    public function setSizeLength($sizeLength): void
    {
        $this->sizeLength = $sizeLength;
    }

    /**
     * @return mixed
     */
    public function getSizeDepth()
    {
        return $this->sizeDepth;
    }

    /**
     * @param mixed $sizeDepth
     */
    public function setSizeDepth($sizeDepth): void
    {
        $this->sizeDepth = $sizeDepth;
    }

    /**
     * @return mixed
     */
    public function getSizeOrder()
    {
        return $this->sizeOrder;
    }

    /**
     * @param mixed $sizeOrder
     */
    public function setSizeOrder($sizeOrder): void
    {
        $this->sizeOrder = $sizeOrder;
    }

    /**
     * @return mixed
     */
    public function getSizeStatus()
    {
        return $this->sizeStatus;
    }

    /**
     * @param mixed $sizeStatus
     */
    public function setSizeStatus($sizeStatus): void
    {
        $this->sizeStatus = $sizeStatus;
    }

    /**
     * @return mixed
     */
    public function getItemCategoryId()
    {
        return $this->itemCategoryId;
    }

    /**
     * @param mixed $itemCategoryId
     */
    public function setItemCategoryId($itemCategoryId): void
    {
        $this->itemCategoryId = $itemCategoryId;
    }

    /**
     * @return mixed
     */
    public function getDeliveryMethodId()
    {
        return $this->deliveryMethodId;
    }

    /**
     * @param mixed $deliveryMethodId
     */
    public function setDeliveryMethodId($deliveryMethodId): void
    {
        $this->deliveryMethodId = $deliveryMethodId;
    }

}