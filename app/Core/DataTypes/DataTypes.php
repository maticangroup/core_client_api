<?php
/**
 * Created by PhpStorm.
 * User: hossein
 * Date: 02/06/19
 * Time: 18:28
 */

namespace Matican\Core\DataTypes;


class DataTypes
{
    private $input;
    private $output;


    /**
     * DataTypes constructor.
     * @param $input
     */
    public function __construct($input)
    {
        $this->input = $input;
        $this->output = $input;
        return $this->output;
    }

    /**
     * @return mixed
     */
    private function getInput()
    {
        return $this->input;
    }

    /**
     * @param mixed $input
     */
    private function setInput($input): void
    {
        $this->input = $input;
    }

    /**
     * @return string
     */


    public function __toString()
    {
        /*
         * YES!!!!! This is working!!!!
         */
        return (string)$this->output;
    }
}