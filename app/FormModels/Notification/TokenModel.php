<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/22/2019
 * Time: 11:01 AM
 */

namespace Matican\FormModels\Notification;


class TokenModel
{
    private $tokenId;
    private $tokenKey;
    private $tokenValue;
    private $smsTemplateId;
    private $emailTemplateId;

    /**
     * @return mixed
     */
    public function getTokenId()
    {
        return $this->tokenId;
    }

    /**
     * @param mixed $tokenId
     */
    public function setTokenId($tokenId): void
    {
        $this->tokenId = $tokenId;
    }

    /**
     * @return mixed
     */
    public function getTokenKey()
    {
        return $this->tokenKey;
    }

    /**
     * @param mixed $tokenKey
     */
    public function setTokenKey($tokenKey): void
    {
        $this->tokenKey = $tokenKey;
    }

    /**
     * @return mixed
     */
    public function getTokenValue()
    {
        return $this->tokenValue;
    }

    /**
     * @param mixed $tokenValue
     */
    public function setTokenValue($tokenValue): void
    {
        $this->tokenValue = $tokenValue;
    }

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
    public function getEmailTemplateId()
    {
        return $this->emailTemplateId;
    }

    /**
     * @param mixed $emailTemplateId
     */
    public function setEmailTemplateId($emailTemplateId): void
    {
        $this->emailTemplateId = $emailTemplateId;
    }
}