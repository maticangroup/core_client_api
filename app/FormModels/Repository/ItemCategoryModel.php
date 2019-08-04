<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/1/2019
 * Time: 6:06 PM
 */

namespace Matican\FormModels\Repository;


class ItemCategoryModel
{
    private $itemCategoryID;
    private $itemCategoryName;
    private $itemCategoryImageUrl;
    private $itemCategoryImageAlt;
    private $itemCategoryParentId;
    private $itemCategoryParentName;
    private $itemCategorySizeId;
    private $itemCategoryDescription;
    private $itemSpecGroups;
    private $itemCategoryHasChild;
    private $itemCategoryChildren;
    private $itemCategorySpecKeysIds;
    private $itemCategoryIsChecked;
    private $itemCategoryDepth;
    private $thumbnail;

    /**
     * @return mixed
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * @param mixed $thumbnail
     */
    public function setThumbnail($thumbnail): void
    {
        $this->thumbnail = $thumbnail;
    }

    /**
     * @return mixed
     */
    public function getItemCategoryID()
    {
        return $this->itemCategoryID;
    }

    /**
     * @param mixed $itemCategoryID
     */
    public function setItemCategoryID($itemCategoryID): void
    {
        $this->itemCategoryID = $itemCategoryID;
    }

    /**
     * @return mixed
     */
    public function getItemCategoryName()
    {
        return $this->itemCategoryName;
    }

    /**
     * @param mixed $itemCategoryName
     */
    public function setItemCategoryName($itemCategoryName): void
    {
        $this->itemCategoryName = $itemCategoryName;
    }

    /**
     * @return mixed
     */
    public function getItemCategoryImageUrl()
    {
        return $this->itemCategoryImageUrl;
    }

    /**
     * @param mixed $itemCategoryImageUrl
     */
    public function setItemCategoryImageUrl($itemCategoryImageUrl): void
    {
        $this->itemCategoryImageUrl = $itemCategoryImageUrl;
    }

    /**
     * @return mixed
     */
    public function getItemCategoryImageAlt()
    {
        return $this->itemCategoryImageAlt;
    }

    /**
     * @param mixed $itemCategoryImageAlt
     */
    public function setItemCategoryImageAlt($itemCategoryImageAlt): void
    {
        $this->itemCategoryImageAlt = $itemCategoryImageAlt;
    }

    /**
     * @return mixed
     */
    public function getItemCategoryParentId()
    {
        return $this->itemCategoryParentId;
    }

    /**
     * @param mixed $itemCategoryParentId
     */
    public function setItemCategoryParentId($itemCategoryParentId): void
    {
        $this->itemCategoryParentId = $itemCategoryParentId;
    }

    /**
     * @return mixed
     */
    public function getItemCategoryParentName()
    {
        return $this->itemCategoryParentName;
    }

    /**
     * @param mixed $itemCategoryParentName
     */
    public function setItemCategoryParentName($itemCategoryParentName): void
    {
        $this->itemCategoryParentName = $itemCategoryParentName;
    }

    /**
     * @return mixed
     */
    public function getItemCategorySizeId()
    {
        return $this->itemCategorySizeId;
    }

    /**
     * @param mixed $itemCategorySizeId
     */
    public function setItemCategorySizeId($itemCategorySizeId): void
    {
        $this->itemCategorySizeId = $itemCategorySizeId;
    }

    /**
     * @return mixed
     */
    public function getItemCategoryDescription()
    {
        return $this->itemCategoryDescription;
    }

    /**
     * @param mixed $itemCategoryDescription
     */
    public function setItemCategoryDescription($itemCategoryDescription): void
    {
        $this->itemCategoryDescription = $itemCategoryDescription;
    }

    /**
     * @return mixed
     */
    public function getItemSpecGroups()
    {
        return $this->itemSpecGroups;
    }

    /**
     * @param mixed $itemSpecGroups
     */
    public function setItemSpecGroups($itemSpecGroups): void
    {
        $this->itemSpecGroups = $itemSpecGroups;
    }

    /**
     * @return mixed
     */
    public function getItemCategoryHasChild()
    {
        return $this->itemCategoryHasChild;
    }

    /**
     * @param mixed $itemCategoryHasChild
     */
    public function setItemCategoryHasChild($itemCategoryHasChild): void
    {
        $this->itemCategoryHasChild = $itemCategoryHasChild;
    }

    /**
     * @return mixed
     */
    public function getItemCategoryChildren()
    {
        return $this->itemCategoryChildren;
    }

    /**
     * @param mixed $itemCategoryChildren
     */
    public function setItemCategoryChildren($itemCategoryChildren): void
    {
        $this->itemCategoryChildren = $itemCategoryChildren;
    }

    /**
     * @return mixed
     */
    public function getItemCategorySpecKeysIds()
    {
        return $this->itemCategorySpecKeysIds;
    }

    /**
     * @param mixed $itemCategorySpecKeysIds
     */
    public function setItemCategorySpecKeysIds($itemCategorySpecKeysIds): void
    {
        $this->itemCategorySpecKeysIds = $itemCategorySpecKeysIds;
    }

    /**
     * @return mixed
     */
    public function getItemCategoryIsChecked()
    {
        return $this->itemCategoryIsChecked;
    }

    /**
     * @param mixed $itemCategoryIsChecked
     */
    public function setItemCategoryIsChecked($itemCategoryIsChecked): void
    {
        $this->itemCategoryIsChecked = $itemCategoryIsChecked;
    }

    /**
     * @return mixed
     */
    public function getItemCategoryDepth()
    {
        return $this->itemCategoryDepth;
    }

    /**
     * @param mixed $itemCategoryDepth
     */
    public function setItemCategoryDepth($itemCategoryDepth): void
    {
        $this->itemCategoryDepth = $itemCategoryDepth;
    }

}