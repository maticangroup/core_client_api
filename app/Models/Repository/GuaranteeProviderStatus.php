<?php

namespace App\Models\Repository;


use App\Core\Concepts\CRUDActions;
use App\Core\DataTypes\MachineName;

class GuaranteeProviderStatus extends CRUDActions
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
     * @param MachineName
     */
    private $machine_name;

    /**
     * @param GuaranteeProvider
     */
    private $guaranteeProviders;

    public function __construct()
    {
        $this->guaranteeProviders = [];
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
     * @return GuaranteeProviderStatus
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return MachineName
     */
    public function getMachineName()
    {
        return $this->machine_name;
    }

    /**
     * @param MachineName $machine_name
     * @return GuaranteeProviderStatus
     */
    public function setMachineName(MachineName $machine_name)
    {
        $this->machine_name = $machine_name;

        return $this;
    }

    /**
     * @return GuaranteeProvider[]
     */
    public function getGuaranteeProviders()
    {
        return $this->guaranteeProviders;
    }
}
