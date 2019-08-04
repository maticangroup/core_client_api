<?php

namespace Matican\Models\Repository;


use Matican\Core\Concepts\CRUDActions;
use Matican\Core\DataTypes\Serial;


class BankAccount extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param Serial
     */
    private $serial;

    /**
     * @param string
     */
    private $name;

    /**
     * @param Person
     */
    private $person;

    /**
     * @param string
     */
    private $bank_name;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Serial
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * @param Serial $serial
     * @return BankAccount
     */
    public function setSerial(Serial $serial)
    {
        $this->serial = $serial;

        return $this;
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
     * @return BankAccount
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Person
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * @param Person $person
     * @return BankAccount
     */
    public function setPerson(Person $person)
    {
        $this->person = $person;

        return $this;
    }


    /**
     * @return string
     */
    public function getBankName()
    {
        return $this->bank_name;
    }

    /**
     * @param string $bank_name
     * @return BankAccount
     */
    public function setBankName($bank_name)
    {
        $this->bank_name = $bank_name;

        return $this;
    }


}
