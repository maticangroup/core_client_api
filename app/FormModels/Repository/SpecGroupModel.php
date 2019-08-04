<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/1/2019
 * Time: 7:10 PM
 */

namespace Matican\FormModels\Repository;


class SpecGroupModel
{
    private $specGroupID;
    private $specGroupName;
    private $specGroupDisplayOrder;
    /**
     * @var SpecKeyModel
     */
    private $specGroupSpecKeys;
    private $itemCategoryId;

    /**
     * @return mixed
     */
    public function getSpecGroupID()
    {
        return $this->specGroupID;
    }

    /**
     * @param mixed $specGroupID
     */
    public function setSpecGroupID($specGroupID): void
    {
        $this->specGroupID = $specGroupID;
    }

    /**
     * @return mixed
     */
    public function getSpecGroupName()
    {
        return $this->specGroupName;
    }

    /**
     * @param mixed $specGroupName
     */
    public function setSpecGroupName($specGroupName): void
    {
        $this->specGroupName = $specGroupName;
    }

    /**
     * @return mixed
     */
    public function getSpecGroupDisplayOrder()
    {
        return $this->specGroupDisplayOrder;
    }

    /**
     * @param mixed $specGroupDisplayOrder
     */
    public function setSpecGroupDisplayOrder($specGroupDisplayOrder): void
    {
        $this->specGroupDisplayOrder = $specGroupDisplayOrder;
    }

    /**
     * @return mixed
     */
    public function getSpecGroupSpecKeys()
    {
        return $this->specGroupSpecKeys;
    }

    /**
     * @param mixed $specGroupSpecKeys
     */
    public function setSpecGroupSpecKeys($specGroupSpecKeys): void
    {
        $this->specGroupSpecKeys = $specGroupSpecKeys;
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




}