<?php

namespace App\Models\Ticketing;

use App\Core\Concepts\CRUDActions;
use App\Models\Repository\Person;
use App\Core\DataTypes\DateTime;
use App\Core\DataTypes\Text;

class Comment extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param Person
     */
    private $created_by;

    /**
     * @param DateTime
     */
    private $create_date;

    /**
     * @param Text
     */
    private $content;

    /**
     * @param CommentPoint
     */
//    private $points;

    /**
     * @param Comment
     */
    private $parent_comment;

    /**
     * @param Comment
     */
//    private $replies;

    /**
     * @param CommentStatus
     */
    private $commentStatus;

    /**
     * @param CommentType
     */
    private $commentType;


    public function __construct()
    {
//        $this->points = [];
//        $this->replies = [];
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
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
     * @return Comment
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
     * @return Comment
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
     * @return Comment
     */
    public function setContent(Text $content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return CommentPoint[]
     */
    public function getPoints()
    {
//        return $this->points;
    }

    /**
     * @return Comment
     */
    public function getParentComment()
    {
        return $this->parent_comment;
    }

    /**
     * @param Comment $parent_comment
     * @return Comment
     */
    public function setParentComment(Comment $parent_comment)
    {
        $this->parent_comment = $parent_comment;

        return $this;
    }

    /**
     * @return Comment[]
     */
    public function getReplies()
    {
//        return $this->replies;
    }

    /**
     * @return CommentStatus
     */
    public function getCommentStatus()
    {
        return $this->commentStatus;
    }

    /**
     * @param CommentStatus $commentStatus
     * @return Comment
     */
    public function setCommentStatus(CommentStatus $commentStatus)
    {
        $this->commentStatus = $commentStatus;

        return $this;
    }

    /**
     * @return CommentType
     */
    public function getCommentType()
    {
        return $this->commentType;
    }

    /**
     * @param CommentType $commentType
     * @return Comment
     */
    public function setCommentType(CommentType $commentType)
    {
        $this->commentType = $commentType;

        return $this;
    }

    /**
     * @param $machineName
     * @return string
     */
    public function changeCommentStatus($machineName)
    {
        return "";
    }

    /**
     * @param $machineName
     * @return string
     */
    public function changeCommentType($machineName)
    {
        return "";
    }
}
