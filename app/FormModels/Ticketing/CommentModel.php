<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/19/2019
 * Time: 6:54 PM
 */

namespace Matican\FormModels\Ticketing;


class CommentModel
{
    private $commentId;
    private $commentDescription;
    private $commentCreateDate;
    private $commentCreatePersonId;
    private $commentCreatePersonFirstName;
    private $commentCreatePersonLastName;
    private $commentParentId;
    private $itemId;
    private $commentDate;
    private $commentStatus;
    private $commentReadType;
    private $commentType;
    private $commentPoints;
    private $commentPointType;
    private $itemCommentId;

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

    /**
     * @return mixed
     */
    public function getCommentDescription()
    {
        return $this->commentDescription;
    }

    /**
     * @param mixed $commentDescription
     */
    public function setCommentDescription($commentDescription): void
    {
        $this->commentDescription = $commentDescription;
    }

    /**
     * @return mixed
     */
    public function getCommentCreateDate()
    {
        return $this->commentCreateDate;
    }

    /**
     * @param mixed $commentCreateDate
     */
    public function setCommentCreateDate($commentCreateDate): void
    {
        $this->commentCreateDate = $commentCreateDate;
    }

    /**
     * @return mixed
     */
    public function getCommentCreatePersonId()
    {
        return $this->commentCreatePersonId;
    }

    /**
     * @param mixed $commentCreatePersonId
     */
    public function setCommentCreatePersonId($commentCreatePersonId): void
    {
        $this->commentCreatePersonId = $commentCreatePersonId;
    }

    /**
     * @return mixed
     */
    public function getCommentCreatePersonFirstName()
    {
        return $this->commentCreatePersonFirstName;
    }

    /**
     * @param mixed $commentCreatePersonFirstName
     */
    public function setCommentCreatePersonFirstName($commentCreatePersonFirstName): void
    {
        $this->commentCreatePersonFirstName = $commentCreatePersonFirstName;
    }

    /**
     * @return mixed
     */
    public function getCommentCreatePersonLastName()
    {
        return $this->commentCreatePersonLastName;
    }

    /**
     * @param mixed $commentCreatePersonLastName
     */
    public function setCommentCreatePersonLastName($commentCreatePersonLastName): void
    {
        $this->commentCreatePersonLastName = $commentCreatePersonLastName;
    }

    /**
     * @return mixed
     */
    public function getCommentParentId()
    {
        return $this->commentParentId;
    }

    /**
     * @param mixed $commentParentId
     */
    public function setCommentParentId($commentParentId): void
    {
        $this->commentParentId = $commentParentId;
    }

    /**
     * @return mixed
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param mixed $itemId
     */
    public function setItemId($itemId): void
    {
        $this->itemId = $itemId;
    }

    /**
     * @return mixed
     */
    public function getCommentStatus()
    {
        return $this->commentStatus;
    }

    /**
     * @param mixed $commentStatus
     */
    public function setCommentStatus($commentStatus): void
    {
        $this->commentStatus = $commentStatus;
    }

    /**
     * @return mixed
     */
    public function getCommentReadType()
    {
        return $this->commentReadType;
    }

    /**
     * @param mixed $commentReadType
     */
    public function setCommentReadType($commentReadType): void
    {
        $this->commentReadType = $commentReadType;
    }

    /**
     * @return mixed
     */
    public function getCommentType()
    {
        return $this->commentType;
    }

    /**
     * @param mixed $commentType
     */
    public function setCommentType($commentType): void
    {
        $this->commentType = $commentType;
    }

    /**
     * @return mixed
     */
    public function getCommentPoints()
    {
        return $this->commentPoints;
    }

    /**
     * @param mixed $commentPoints
     */
    public function setCommentPoints($commentPoints): void
    {
        $this->commentPoints = $commentPoints;
    }

    /**
     * @return mixed
     */
    public function getCommentDate()
    {
        return $this->commentDate;
    }

    /**
     * @param mixed $commentDate
     */
    public function setCommentDate($commentDate): void
    {
        $this->commentDate = $commentDate;
    }

    /**
     * @return mixed
     */
    public function getItemCommentId()
    {
        return $this->itemCommentId;
    }

    /**
     * @param mixed $itemCommentId
     */
    public function setItemCommentId($itemCommentId): void
    {
        $this->itemCommentId = $itemCommentId;
    }

    /**
     * @return mixed
     */
    public function getCommentPointType()
    {
        return $this->commentPointType;
    }

    /**
     * @param mixed $commentPointType
     */
    public function setCommentPointType($commentPointType): void
    {
        $this->commentPointType = $commentPointType;
    }
}