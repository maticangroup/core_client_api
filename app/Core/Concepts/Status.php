<?php
/**
 * Created by PhpStorm.
 * Person: hossein
 * Date: 30/04/19
 * Time: 12:24
 */

namespace Matican\Core\Concepts;


use Matican\Core\DataTypes\MachineName;
use Matican\Core\DataTypes\Text;

class Status
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
     * Status constructor.
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