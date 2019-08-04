<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/6/2019
 * Time: 6:51 PM
 */

namespace Matican\FormModels\Repository;


class BrandSuppliersModel
{
    private $brandId;
    private $brandSuppliers;

    /**
     * @return mixed
     */
    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * @param mixed $brandId
     */
    public function setBrandId($brandId): void
    {
        $this->brandId = $brandId;
    }

    /**
     * @return mixed
     */
    public function getBrandSuppliers()
    {
        return $this->brandSuppliers;
    }

    /**
     * @param mixed $brandSuppliers
     */
    public function setBrandSuppliers($brandSuppliers): void
    {
        $this->brandSuppliers = $brandSuppliers;
    }


}