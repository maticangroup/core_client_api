<?php

namespace App\Models\Repository;


use App\Core\Concepts\CRUDActions;
use App\Core\DataTypes\Serial;

class Barcode extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param Serial
     */
    private $serial;

    /**
     * @param Item
     */
    private $item;


    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Serial
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * @param Serial $serial
     * @return Barcode
     */
    public function setSerial(Serial $serial)
    {
        $this->serial = $serial;

        return $this;
    }

    /**
     * @return Item
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param Item $item
     * @return Barcode
     */
    public function setItem(Item $item)
    {
        $this->item = $item;

        return $this;
    }
}
