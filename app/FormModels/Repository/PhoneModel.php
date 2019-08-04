<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/2/2019
 * Time: 1:14 PM
 */

namespace Matican\FormModels\Repository;


class PhoneModel
{
    private $id;
    private $phone;
    private $companyID;
    private $inventoryID;
    private $shelveID;

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
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getCompanyID()
    {
        return $this->companyID;
    }

    /**
     * @param mixed $companyID
     */
    public function setCompanyID($companyID): void
    {
        $this->companyID = $companyID;
    }

    /**
     * @return mixed
     */
    public function getInventoryID()
    {
        return $this->inventoryID;
    }

    /**
     * @param mixed $inventoryID
     */
    public function setInventoryID($inventoryID): void
    {
        $this->inventoryID = $inventoryID;
    }

    /**
     * @return mixed
     */
    public function getShelveID()
    {
        return $this->shelveID;
    }

    /**
     * @param mixed $shelveID
     */
    public function setShelveID($shelveID): void
    {
        $this->shelveID = $shelveID;
    }


}