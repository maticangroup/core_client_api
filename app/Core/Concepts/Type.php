<?php
/**
 * Created by PhpStorm.
 * Person: hossein
 * Date: 30/04/19
 * Time: 12:25
 */

namespace App\Core\Concepts;


use App\Core\DataTypes\MachineName;
use App\Core\DataTypes\Text;

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