<?php
/**
 * Created by PhpStorm.
 * PersonActions: hossein
 * Date: 30/04/19
 * Time: 12:25
 */

namespace Matican\Core\Concepts;


use Matican\Core\DataTypes\MachineName;
use Matican\Core\DataTypes\Text;

class Type
{
    /**
     * @var Text
     */
    private $name;
    /**
     * @var MachineName
     */
    private $machineName;

    /**
     * Type constructor.
     * @param Text $name
     */
    public function __construct(Text $name)
    {
        $this->name = $name;
    }


    /**
     * @return Text
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param Text $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return MachineName
     */
    public function getMachineName()
    {
        return $this->machineName;
    }

    /**
     * @param MachineName $machineName
     */
    public function setMachineName($machineName)
    {
        $this->machineName = $machineName;
    }

}