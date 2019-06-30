<?php

namespace Matican\Models\Repository;


use Matican\Core\Concepts\CRUDActions;
use Matican\Core\DataTypes\Text;

class SpecValue extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param Text
     */
    private $value;

    /**
     * @param SpecKeyValue
     */
    private $spec_key_values;

    public function __construct()
    {
        $this->spec_key_values = [];
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Text
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param Text $value
     * @return SpecValue
     */
    public function setValue(Text $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return SpecKeyValue[]
     */
    public function getSpecKeyValues()
    {
        return $this->spec_key_values;
    }
}
