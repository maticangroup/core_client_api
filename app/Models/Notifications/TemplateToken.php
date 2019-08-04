<?php

namespace Matican\Models\Notifications;


use Matican\Core\Concepts\CRUDActions;
use Matican\Core\DataTypes\MachineName;
use Matican\Core\DataTypes\Text;

class TemplateToken extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param MachineName
     */
    private $machine_name;

    /**
     * @param Text
     */
    private $description;

    /**
     * @param EmailTemplate
     */
//    private $emailTemplates;

    /**
     * @param SMSTemplate
     */
//    private $sMSTemplates;

    public function __construct()
    {
//        $this->emailTemplates = [];
//        $this->sMSTemplates = [];
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
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
     * @return TemplateToken
     */
    public function setMachineName(MachineName $machine_name)
    {
        $this->machine_name = $machine_name;

        return $this;
    }

    /**
     * @return Text
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param Text $description
     * @return TemplateToken
     */
    public function setDescription(Text $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return EmailTemplate[]
     */
    public function getEmailTemplates()
    {
//        return $this->emailTemplates;
    }

    /**
     * @return SMSTemplate[]
     */
    public function getSMSTemplates()
    {
//        return $this->sMSTemplates;
    }
}
