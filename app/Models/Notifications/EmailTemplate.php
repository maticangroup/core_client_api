<?php

namespace Matican\Models\Notifications;


use Matican\Core\Concepts\CRUDActions;
use Matican\Core\DataTypes\MachineName;
use Matican\Core\DataTypes\Text;

class EmailTemplate extends CRUDActions
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
     * @param TemplateToken
     */
//    private $accepted_tokens;

    /**
     * @param Text
     */
    private $template;

    public function __construct()
    {
//        $this->accepted_tokens = [];
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
     * @return EmailTemplate
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
     * @return EmailTemplate
     */
    public function setMachineName(MachineName $machine_name)
    {
        $this->machine_name = $machine_name;

        return $this;
    }

    /**
     * @return TemplateToken[]
     */
    public function getAcceptedTokens()
    {
//        return $this->accepted_tokens;
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
     * @return EmailTemplate
     */
    public function setTemplate(Text $template)
    {
        $this->template = $template;

        return $this;
    }
}
