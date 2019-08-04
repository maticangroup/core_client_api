<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/4/2019
 * Time: 4:50 PM
 */

namespace Matican\FormModels\Repository;


class BarcodeModel
{
    private $barcodeId;
    private $barcodeName;
    private $ItemId;

    /**
     * @return mixed
     */
    public function getBarcodeId()
    {
        return $this->barcodeId;
    }

    /**
     * @param mixed $barcodeId
     */
    public function setBarcodeId($barcodeId): void
    {
        $this->barcodeId = $barcodeId;
    }

    /**
     * @return mixed
     */
    public function getBarcodeName()
    {
        return $this->barcodeName;
    }

    /**
     * @param mixed $barcodeName
     */
    public function setBarcodeName($barcodeName): void
    {
        $this->barcodeName = $barcodeName;
    }

    /**
     * @return mixed
     */
    public function getItemId()
    {
        return $this->ItemId;
    }

    /**
     * @param mixed $ItemId
     */
    public function setItemId($ItemId): void
    {
        $this->ItemId = $ItemId;
    }
}