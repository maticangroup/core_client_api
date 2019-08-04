<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/7/2019
 * Time: 2:00 PM
 */

namespace App\FormModels\Inventory;


class ShelveModel
{
    private $shelveId;
    private $shelveName;
    private $shelveKeeperId;
    private $shelveKeeperName;
    private $shelveKeeperPhone;
    private $shelveAddress;
    private $shelveMainPhone;
    private $shelvePhones;
    private $shelveLocation;
    private $shelveLocationContactPersonId;
    private $shelveItemProducts;
    private $shelveDeeds;
    private $shelveStatus;

    /**
     * @return mixed
     */
    public function getShelveId()
    {
        return $this->shelveId;
    }

    /**
     * @param mixed $shelveId
     */
    public function setShelveId($shelveId): void
    {
        $this->shelveId = $shelveId;
    }

    /**
     * @return mixed
     */
    public function getShelveName()
    {
        return $this->shelveName;
    }

    /**
     * @param mixed $shelveName
     */
    public function setShelveName($shelveName): void
    {
        $this->shelveName = $shelveName;
    }

    /**
     * @return mixed
     */
    public function getShelveKeeperId()
    {
        return $this->shelveKeeperId;
    }

    /**
     * @param mixed $shelveKeeperId
     */
    public function setShelveKeeperId($shelveKeeperId): void
    {
        $this->shelveKeeperId = $shelveKeeperId;
    }

    /**
     * @return mixed
     */
    public function getShelveKeeperName()
    {
        return $this->shelveKeeperName;
    }

    /**
     * @param mixed $shelveKeeperName
     */
    public function setShelveKeeperName($shelveKeeperName): void
    {
        $this->shelveKeeperName = $shelveKeeperName;
    }

    /**
     * @return mixed
     */
    public function getShelveKeeperPhone()
    {
        return $this->shelveKeeperPhone;
    }

    /**
     * @param mixed $shelveKeeperPhone
     */
    public function setShelveKeeperPhone($shelveKeeperPhone): void
    {
        $this->shelveKeeperPhone = $shelveKeeperPhone;
    }

    /**
     * @return mixed
     */
    public function getShelveAddress()
    {
        return $this->shelveAddress;
    }

    /**
     * @param mixed $shelveAddress
     */
    public function setShelveAddress($shelveAddress): void
    {
        $this->shelveAddress = $shelveAddress;
    }

    /**
     * @return mixed
     */
    public function getShelveMainPhone()
    {
        return $this->shelveMainPhone;
    }

    /**
     * @param mixed $shelveMainPhone
     */
    public function setShelveMainPhone($shelveMainPhone): void
    {
        $this->shelveMainPhone = $shelveMainPhone;
    }

    /**
     * @return mixed
     */
    public function getShelvePhones()
    {
        return $this->shelvePhones;
    }

    /**
     * @param mixed $shelvePhones
     */
    public function setShelvePhones($shelvePhones): void
    {
        $this->shelvePhones = $shelvePhones;
    }

    /**
     * @return mixed
     */
    public function getShelveLocation()
    {
        return $this->shelveLocation;
    }

    /**
     * @param mixed $shelveLocation
     */
    public function setShelveLocation($shelveLocation): void
    {
        $this->shelveLocation = $shelveLocation;
    }

    /**
     * @return mixed
     */
    public function getShelveItemProducts()
    {
        return $this->shelveItemProducts;
    }

    /**
     * @param mixed $shelveItemProducts
     */
    public function setShelveItemProducts($shelveItemProducts): void
    {
        $this->shelveItemProducts = $shelveItemProducts;
    }

    /**
     * @return mixed
     */
    public function getShelveDeeds()
    {
        return $this->shelveDeeds;
    }

    /**
     * @param mixed $shelveDeeds
     */
    public function setShelveDeeds($shelveDeeds): void
    {
        $this->shelveDeeds = $shelveDeeds;
    }

    /**
     * @return mixed
     */
    public function getShelveStatus()
    {
        return $this->shelveStatus;
    }

    /**
     * @param mixed $shelveStatus
     */
    public function setShelveStatus($shelveStatus): void
    {
        $this->shelveStatus = $shelveStatus;
    }

    /**
     * @return mixed
     */
    public function getShelveLocationContactPersonId()
    {
        return $this->shelveLocationContactPersonId;
    }

    /**
     * @param mixed $shelveLocationContactPersonId
     */
    public function setShelveLocationContactPersonId($shelveLocationContactPersonId): void
    {
        $this->shelveLocationContactPersonId = $shelveLocationContactPersonId;
    }
}