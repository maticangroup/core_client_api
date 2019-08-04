<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/22/2019
 * Time: 12:13 PM
 */

namespace App\FormModels\Notification;


class MailTemplateModel
{
    private $mailTemplateId;
    private $mailTemplateTitle;
    private $mailTemplateContent;
    private $mailTemplateTokens;

    /**
     * @return mixed
     */
    public function getMailTemplateId()
    {
        return $this->mailTemplateId;
    }

    /**
     * @param mixed $mailTemplateId
     */
    public function setMailTemplateId($mailTemplateId): void
    {
        $this->mailTemplateId = $mailTemplateId;
    }

    /**
     * @return mixed
     */
    public function getMailTemplateContent()
    {
        return $this->mailTemplateContent;
    }

    /**
     * @param mixed $mailTemplateContent
     */
    public function setMailTemplateContent($mailTemplateContent): void
    {
        $this->mailTemplateContent = $mailTemplateContent;
    }

    /**
     * @return mixed
     */
    public function getMailTemplateTokens()
    {
        return $this->mailTemplateTokens;
    }

    /**
     * @param mixed $mailTemplateTokens
     */
    public function setMailTemplateTokens($mailTemplateTokens): void
    {
        $this->mailTemplateTokens = $mailTemplateTokens;
    }

    /**
     * @return mixed
     */
    public function getMailTemplateTitle()
    {
        return $this->mailTemplateTitle;
    }

    /**
     * @param mixed $mailTemplateTitle
     */
    public function setMailTemplateTitle($mailTemplateTitle): void
    {
        $this->mailTemplateTitle = $mailTemplateTitle;
    }
}