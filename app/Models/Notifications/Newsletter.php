<?php

namespace Matican\Models\Notifications;

use Matican\Core\Concepts\CRUDActions;
use Matican\Models\Repository\FlexibleContent\FlexibleContent;
use Matican\Models\Repository\Person;
use Matican\Core\DataTypes\DateTime;
use Matican\Core\DataTypes\Text;

class NewsLetter extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param Text
     */
    private $title;

    /**
     * @param Text
     */
    private $content;

    /**
     * @param Person
     */
    private $created_by;

    /**
     * @param DateTime
     */
    private $create_date;

    /**
     * @param NewsLetterStatus
     */
    private $newsLetterStatus;

    /**
     * @param FlexibleContent
     */
    private $flexible_content;

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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param Text $title
     * @return NewsLetter
     */
    public function setTitle(Text $title)
    {
        $this->title = $title;

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
     * @return NewsLetter
     */
    public function setContent(Text $content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return Person
     */
    public function getCreatedBy()
    {
        return $this->created_by;
    }

    /**
     * @param Person $created_by
     * @return NewsLetter
     */
    public function setCreatedBy(Person $created_by)
    {
        $this->created_by = $created_by;

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
     * @return NewsLetter
     */
    public function setCreateDate(DateTime $create_date)
    {
        $this->create_date = $create_date;

        return $this;
    }

    /**
     * @return NewsLetterStatus
     */
    public function getNewsLetterStatus()
    {
        return $this->newsLetterStatus;
    }

    /**
     * @param NewsLetterStatus $newsLetterStatus
     * @return NewsLetter
     */
    public function setNewsLetterStatus(NewsLetterStatus $newsLetterStatus)
    {
        $this->newsLetterStatus = $newsLetterStatus;

        return $this;
    }

    /**
     * @return FlexibleContent
     */
    public function getFlexibleContent()
    {
        return $this->flexible_content;
    }

    /**
     * @param FlexibleContent $flexible_content
     */
    public function setFlexibleContent(FlexibleContent $flexible_content)
    {
        $this->flexible_content = $flexible_content;
    }

    /**
     * @param $machineName
     * @return string
     */
    public function changeNewsLetterStatus($machineName)
    {
        return "";
    }
}
