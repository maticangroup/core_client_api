<?php

namespace Matican\Models\Accounting;



use Matican\Core\Concepts\CRUDActions;
use Matican\Core\DataTypes\MachineName;

class UserCreditAccountStatus extends CRUDActions
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
     * @param UserCreditBalance
     */
    private $userCreditBalances;

    public function __construct()
    {
        $this->userCreditBalances = [];
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
     * @return $this
     */
    public function setName($name)
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
     * @return $this
     */
    public function setMachineName(MachineName $machine_name)
    {
        $this->machine_name = $machine_name;

        return $this;
    }

    /**
     * @return UserCreditBalance[]
     */
    public function getUserCreditBalances()
    {
        return $this->userCreditBalances;
    }
}
