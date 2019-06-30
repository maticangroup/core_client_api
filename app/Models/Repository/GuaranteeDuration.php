<?php

namespace App\Models\Repository;


use App\Core\Concepts\CRUDActions;

class GuaranteeDuration extends CRUDActions
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
    private $guarantees;

    /**
     * @param GuaranteeDurationStatus
     */
    private $status;

    public function __construct()
    {
        $this->guarantees = [];
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
     * @return GuaranteeDuration
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
        return $this->guarantees;
    }

    /**
     * @return GuaranteeDurationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param GuaranteeDurationStatus $status
     * @return GuaranteeDuration
     */
    public function setStatus(GuaranteeDurationStatus $status)
    {
        $this->status = $status;

        return $this;
    }

    public function changeGuaranteeDurationStatus($machineName)
    {
        return "";
    }
}
