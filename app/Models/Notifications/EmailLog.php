<?php

namespace Matican\Models\Notifications;


use Matican\Core\Concepts\CRUDActions;
use Matican\Core\DataTypes\DateTime;
use Matican\Core\DataTypes\Text;

class EmailLog extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param Text
     */
    private $from_email;

    /**
     * @param Text
     */
    private $to_email;

    /**
     * @param Text
     */
    private $subject;

    /**
     * @param Text
     */
    private $content;

    /**
     * @param DateTime
     */
    private $create_date;

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
    public function getFromEmail()
    {
        return $this->from_email;
    }

    /**
     * @param Text $from_email
     * @return EmailLog
     */
    public function setFromEmail(Text $from_email)
    {
        $this->from_email = $from_email;

        return $this;
    }

    /**
     * @return Text
     */
    public function getToEmail()
    {
        return $this->to_email;
    }

    /**
     * @param Text $to_email
     * @return EmailLog
     */
    public function setToEmail(Text $to_email)
    {
        $this->to_email = $to_email;

        return $this;
    }

    /**
     * @return Text
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param Text $subject
     * @return EmailLog
     */
    public function setSubject(Text $subject)
    {
        $this->subject = $subject;

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
     * @return EmailLog
     */
    public function setContent(Text $content)
    {
        $this->content = $content;

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
     * @return EmailLog
     */
    public function setCreateDate(DateTime $create_date)
    {
        $this->create_date = $create_date;

        return $this;
    }
}
