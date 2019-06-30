<?php

namespace Matican\Models\Notifications;


use Matican\Core\Concepts\CRUDActions;
use Matican\Core\DataTypes\MachineName;
use Matican\Core\DataTypes\Text;

class SMSTemplate extends CRUDActions
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
     * @param Text
     */
    private $template;

    /**
     * @param integer
     */
    private $length;

    /**
     * @param TemplateToken
     */
//    private $tokens;

    public function __construct()
    {
//        $this->tokens = [];
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
     * @return SMSTemplate
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
     * @return SMSTemplate
     */
    public function setMachineName(MachineName $machine_name)
    {
        $this->machine_name = $machine_name;

        return $this;
    }

    /**
     * @return Text
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * @param Text $template
     * @return SMSTemplate
     */
    public function setTemplate(Text $template)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * @return integer
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param string $length
     * @return SMSTemplate
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * @return TemplateToken[]
     */
    public function getTokens()
    {
//        return $this->tokens;
    }
}
