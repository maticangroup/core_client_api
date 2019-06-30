<?php

namespace Matican\Models\Repository;


use Matican\Core\Concepts\CRUDActions;

class SpecKeyValue extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param SpecKey
     */
    private $spec_key;

    /**
     * @param Item
     */
    private $items;

    /**
     * @param SpecValue
     */
    private $specValue;

    public function __construct()
    {
        $this->items = [];
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return SpecKey
     */
    public function getSpecKey()
    {
        return $this->spec_key;
    }

    /**
     * @param SpecKey $spec_key
     * @return SpecKeyValue
     */
    public function setSpecKey(SpecKey $spec_key)
    {
        $this->spec_key = $spec_key;

        return $this;
    }

    /**
     * @return Item[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @return SpecValue
     */
    public function getSpecValue()
    {
        return $this->specValue;
    }

    /**
     * @param SpecValue $specValue
     * @return SpecKeyValue
     */
    public function setSpecValue(SpecValue $specValue)
    {
        $this->specValue = $specValue;

        return $this;
    }
}
