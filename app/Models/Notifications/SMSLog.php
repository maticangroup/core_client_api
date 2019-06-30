<?php

namespace App\Models\Notifications;

use App\Core\Concepts\CRUDActions;
use App\Models\Repository\Person;
use App\Core\DataTypes\DateTime;
use App\Core\DataTypes\Text;

class SMSLog extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param Text
     */
    private $sms_from;

    /**
     * @param Text
     */
    private $sms_to;

    /**
     * @param Person
     */
    private $to_person;

    /**
     * @param DateTime
     */
    private $create_date;

    /**
     * @param Text
     */
    private $content;

    /**
     * @param integer
     */
    private $length;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Text
     */
    public function getSmsFrom()
    {
        return $this->sms_from;
    }

    /**
     * @param Text $sms_from
     * @return SMSLog
     */
    public function setSmsFrom(Text $sms_from)
    {
        $this->sms_from = $sms_from;

        return $this;
    }

    /**
     * @return Text
     */
    public function getSmsTo()
    {
        return $this->sms_to;
    }

    /**
     * @param Text $sms_to
     * @return SMSLog
     */
    public function setSmsTo(Text $sms_to)
    {
        $this->sms_to = $sms_to;

        return $this;
    }

    /**
     * @return Person
     */
    public function getToPerson()
    {
        return $this->to_person;
    }

    /**
     * @param Person $to_person
     * @return SMSLog
     */
    public function setToPerson(Person $to_person)
    {
        $this->to_person = $to_person;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreateDate()
    {
        return $this->create_date;
    }

    /**
     * @param DateTime $create_date
     * @return SMSLog
     */
    public function setCreateDate(DateTime $create_date)
    {
        $this->create_date = $create_date;

        return $this;
    }

    /**
     * @return Text
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param Text $content
     * @return SMSLog
     */
    public function setContent(Text $content)
    {
        $this->content = $content;

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
     * @param integer $length
     * @return SMSLog
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }
}
