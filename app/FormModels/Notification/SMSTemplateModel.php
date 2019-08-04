<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/22/2019
 * Time: 12:44 PM
 */

namespace App\FormModels\Notification;


class SMSTemplateModel
{
    private $smsTemplateId;
    private $smsTemplateTitle;
    private $smsTemplateContent;
    private $smsTemplateTokens;

    /**
     * @return mixed
     */
    public function getSmsTemplateId()
    {
        return $this->smsTemplateId;
    }

    /**
     * @param mixed $smsTemplateId
     */
    public function setSmsTemplateId($smsTemplateId): void
    {
        $this->smsTemplateId = $smsTemplateId;
    }

    /**
     * @return mixed
     */
    public function getSmsTemplateTitle()
    {
        return $this->smsTemplateTitle;
    }

    /**
     * @param mixed $smsTemplateTitle
     */
    public function setSmsTemplateTitle($smsTemplateTitle): void
    {
        $this->smsTemplateTitle = $smsTemplateTitle;
    }

    /**
     * @return mixed
     */
    public function getSmsTemplateContent()
    {
        return $this->smsTemplateContent;
    }

    /**
     * @param mixed $smsTemplateContent
     */
    public function setSmsTemplateContent($smsTemplateContent): void
    {
        $this->smsTemplateContent = $smsTemplateContent;
    }

    /**
     * @return mixed
     */
    public function getSmsTemplateTokens()
    {
        return $this->smsTemplateTokens;
    }

    /**
     * @param mixed $smsTemplateTokens
     */
    public function setSmsTemplateTokens($smsTemplateTokens): void
    {
        $this->smsTemplateTokens = $smsTemplateTokens;
    }
}