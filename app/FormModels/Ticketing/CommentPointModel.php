<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/22/2019
 * Time: 8:17 PM
 */

namespace App\FormModels\Ticketing;


class CommentPointModel
{
    private $commentPointId;
    private $commentPointTypeMachineName;
    private $commentPointTitle;
    private $commentId;

    /**
     * @return mixed
     */
    public function getCommentPointId()
    {
        return $this->commentPointId;
    }

    /**
     * @param mixed $commentPointId
     */
    public function setCommentPointId($commentPointId): void
    {
        $this->commentPointId = $commentPointId;
    }

    /**
     * @return mixed
     */
    public function getCommentPointTypeMachineName()
    {
        return $this->commentPointTypeMachineName;
    }

    /**
     * @param mixed $commentPointTypeMachineName
     */
    public function setCommentPointTypeMachineName($commentPointTypeMachineName): void
    {
        $this->commentPointTypeMachineName = $commentPointTypeMachineName;
    }

    /**
     * @return mixed
     */
    public function getCommentPointTitle()
    {
        return $this->commentPointTitle;
    }

    /**
     * @param mixed $commentPointTitle
     */
    public function setCommentPointTitle($commentPointTitle): void
    {
        $this->commentPointTitle = $commentPointTitle;
    }

    /**
     * @return mixed
     */
    public function getCommentId()
    {
        return $this->commentId;
    }

    /**
     * @param mixed $commentId
     */
    public function setCommentId($commentId): void
    {
        $this->commentId = $commentId;
    }
}