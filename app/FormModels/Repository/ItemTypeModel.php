<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/4/2019
 * Time: 6:02 PM
 */

namespace Matican\FormModels\Repository;


class ItemTypeModel
{
    private $itemTypeId;
    private $itemTypeName;
    private $itemTypeMachineName;
    private $itemId;

    /**
     * @return mixed
     */
    public function getItemTypeId()
    {
        return $this->itemTypeId;
    }

    /**
     * @param mixed $itemTypeId
     */
    public function setItemTypeId($itemTypeId): void
    {
        $this->itemTypeId = $itemTypeId;
    }

    /**
     * @return mixed
     */
    public function getItemTypeName()
    {
        return $this->itemTypeName;
    }

    /**
     * @param mixed $itemTypeName
     */
    public function setItemTypeName($itemTypeName): void
    {
        $this->itemTypeName = $itemTypeName;
    }

    /**
     * @return mixed
     */
    public function getItemTypeMachineName()
    {
        return $this->itemTypeMachineName;
    }

    /**
     * @param mixed $itemTypeMachineName
     */
    public function setItemTypeMachineName($itemTypeMachineName): void
    {
        $this->itemTypeMachineName = $itemTypeMachineName;
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