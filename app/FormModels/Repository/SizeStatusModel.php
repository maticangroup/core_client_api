<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/4/2019
 * Time: 4:34 PM
 */

namespace App\FormModels\Repository;


class SizeStatusModel
{
    private $sizeStatusId;
    private $sizeStatusName;
    private $sizeStatusMachineName;
    private $sizeStatusColor;
    private $sizeId;

    /**
     * @return mixed
     */
    public function getSizeStatusId()
    {
        return $this->sizeStatusId;
    }

    /**
     * @param mixed $sizeStatusId
     */
    public function setSizeStatusId($sizeStatusId): void
    {
        $this->sizeStatusId = $sizeStatusId;
    }

    /**
     * @return mixed
     */
    public function getSizeStatusName()
    {
        return $this->sizeStatusName;
    }

    /**
     * @param mixed $sizeStatusName
     */
    public function setSizeStatusName($sizeStatusName): void
    {
        $this->sizeStatusName = $sizeStatusName;
    }

    /**
     * @return mixed
     */
    public function getSizeStatusMachineName()
    {
        return $this->sizeStatusMachineName;
    }

    /**
     * @param mixed $sizeStatusMachineName
     */
    public function setSizeStatusMachineName($sizeStatusMachineName): void
    {
        $this->sizeStatusMachineName = $sizeStatusMachineName;
    }

    /**
     * @return mixed
     */
    public function getSizeStatusColor()
    {
        return $this->sizeStatusColor;
    }

    /**
     * @param mixed $sizeStatusColor
     */
    public function setSizeStatusColor($sizeStatusColor): void
    {
        $this->sizeStatusColor = $sizeStatusColor;
    }

    /**
     * @return mixed
     */
    public function getSizeId()
    {
        return $this->sizeId;
    }

    /**
     * @param mixed $sizeId
     */
    public function setSizeId($sizeId): void
    {
        $this->sizeId = $sizeId;
    }
}