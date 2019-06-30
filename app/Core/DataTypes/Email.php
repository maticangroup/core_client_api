<?php
/**
 * Created by PhpStorm.
 * Person: hossein
 * Date: 30/04/19
 * Time: 10:43
 */

namespace Matican\Core\DataTypes;


class Email extends DataTypes
{

    private $email;

    /**
     * Email constructor.
     * @param $email
     */
    public function __construct($email)
    {
        return $email;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->email;
    }
}