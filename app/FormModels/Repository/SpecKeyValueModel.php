<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/21/2019
 * Time: 5:46 PM
 */

namespace App\FormModels\Repository;


class SpecKeyValueModel
{
    private $itemId;
    private $keyId;
    private $value;
    private $keyValueId;

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

    /**
     * @return mixed
     */
    public function getKeyId()
    {
        return $this->keyId;
    }

    /**
     * @param mixed $keyId
     */
    public function setKeyId($keyId): void
    {
        $this->keyId = $keyId;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value): void
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getKeyValueId()
    {
        return $this->keyValueId;
    }

    /**
     * @param mixed $keyValueId
     */
    public function setKeyValueId($keyValueId): void
    {
        $this->keyValueId = $keyValueId;
    }
}