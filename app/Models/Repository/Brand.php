<?php

namespace App\Models\Repository;


use App\Core\Concepts\CRUDActions;

class Brand extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param string
     */
    private $name;


    /**
     * @param Company
     */
//    private $suppliers;


    /**
     * @todo Brand Logo should be added here after media is created
     */

    public function __construct()
    {
//        $this->suppliers = [];
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Brand
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Company[]
     */
    public function getSuppliers()
    {
//        return $this->suppliers;
    }
}
