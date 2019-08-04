<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/4/2019
 * Time: 11:18 AM
 */

namespace Matican\FormModels\Repository;


class ItemColorStatusModel
{
    private $id;
    private $name;
    private $machineName;
    private $statusColor;
    private $colorId;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getMachineName()
    {
        return $this->machineName;
    }

    /**
     * @param mixed $machineName
     */
    public function setMachineName($machineName): void
    {
        $this->machineName = $machineName;
    }

    /**
     * @return mixed
     */
    public function getStatusColor()
    {
        return $this->statusColor;
    }

    /**
     * @param mixed $statusColor
     */
    public function setStatusColor($statusColor): void
    {
        $this->statusColor = $statusColor;
    }

    /**
     * @return mixed
     */
    public function getColorId()
    {
        return $this->colorId;
    }

    /**
     * @param mixed $colorId
     */
    public function setColorId($colorId): void
    {
        $this->colorId = $colorId;
    }
}