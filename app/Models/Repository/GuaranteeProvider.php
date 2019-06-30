<?php

namespace App\Models\Repository;


use App\Core\Concepts\CRUDActions;

class GuaranteeProvider extends CRUDActions
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
     * @param Guarantee
     */
//    private $guarantees;

    /**
     * @param GuaranteeProviderStatus
     */
    private $status;

    public function __construct()
    {
//        $this->guarantees = [];
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
     * @return GuaranteeProvider
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Guarantee[]
     */
    public function getGuarantees()
    {
//        return $this->guarantees;
    }

    /**
     * @return GuaranteeProviderStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param GuaranteeProviderStatus $status
     * @return GuaranteeProvider
     */
    public function setStatus(GuaranteeProviderStatus $status)
    {
        $this->status = $status;

        return $this;
    }

    public function changeGuaranteeProviderStatus($machineName)
    {
        return "";
    }
}
