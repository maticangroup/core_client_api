<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/2/2019
 * Time: 10:45 PM
 */

namespace Matican\FormModels\Repository;


class BrandSupplierModel
{
    private $companyId;
    private $brandId;

    /**
     * @return mixed
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * @param mixed $companyId
     */
    public function setCompanyId($companyId): void
    {
        $this->companyId = $companyId;
    }

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


}