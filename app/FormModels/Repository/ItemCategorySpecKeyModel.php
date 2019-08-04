<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/5/2019
 * Time: 2:22 PM
 */

namespace Matican\FormModels\Repository;


class ItemCategorySpecKeyModel
{
    private $itemCategoryId;
    private $specKeysIds;

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
    public function getSpecKeysIds()
    {
        return $this->specKeysIds;
    }

    /**
     * @param mixed $specKeysIds
     */
    public function setSpecKeysIds($specKeysIds): void
    {
        $this->specKeysIds = $specKeysIds;
    }

}