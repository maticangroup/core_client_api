<?php

namespace App\Models\Ticketing;


use App\Core\Concepts\CRUDActions;

class CommentPoint extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param CommentPointType
     */
    private $point_type;

    /**
     * @param Comment
     */
    private $comment;

    /**
     * @param string
     */
    private $point;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return CommentPointType
     */
    public function getPointType()
    {
        return $this->point_type;
    }

    /**
     * @param CommentPointType $point_type
     * @return CommentPoint
     */
    public function setPointType(CommentPointType $point_type)
    {
        $this->point_type = $point_type;

        return $this;
    }

    /**
     * @return Comment
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param Comment $comment
     * @return CommentPoint
     */
    public function setComment(Comment $comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * @return string
     */
    public function getPoint()
    {
        return $this->point;
    }

    /**
     * @param string $point
     */
    public function setPoint($point)
    {
        $this->point = $point;
    }

    /**
     * @param $machineName
     * @return string
     */
    public function changeCommentPointType($machineName)
    {
        return "";
    }
}
