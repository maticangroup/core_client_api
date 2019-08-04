<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/22/2019
 * Time: 8:04 PM
 */

namespace App\FormModels\Ticketing;


class ItemCommentsModel
{
    private $itemCommentId;
    private $itemAllCommentsCount;
    private $itemAllApprovedCommentsCount;
    private $itemAllSpamCommentsCount;
    private $itemAllUnreadCommentsCount;
    private $itemLastCommentDate;
    private $itemId;
    private $itemName;
    private $itemCommentComments;

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
    public function getItemAllCommentsCount()
    {
        return $this->itemAllCommentsCount;
    }

    /**
     * @param mixed $itemAllCommentsCount
     */
    public function setItemAllCommentsCount($itemAllCommentsCount): void
    {
        $this->itemAllCommentsCount = $itemAllCommentsCount;
    }

    /**
     * @return mixed
     */
    public function getItemAllApprovedCommentsCount()
    {
        return $this->itemAllApprovedCommentsCount;
    }

    /**
     * @param mixed $itemAllApprovedCommentsCount
     */
    public function setItemAllApprovedCommentsCount($itemAllApprovedCommentsCount): void
    {
        $this->itemAllApprovedCommentsCount = $itemAllApprovedCommentsCount;
    }

    /**
     * @return mixed
     */
    public function getItemAllSpamCommentsCount()
    {
        return $this->itemAllSpamCommentsCount;
    }

    /**
     * @param mixed $itemAllSpamCommentsCount
     */
    public function setItemAllSpamCommentsCount($itemAllSpamCommentsCount): void
    {
        $this->itemAllSpamCommentsCount = $itemAllSpamCommentsCount;
    }

    /**
     * @return mixed
     */
    public function getItemAllUnreadCommentsCount()
    {
        return $this->itemAllUnreadCommentsCount;
    }

    /**
     * @param mixed $itemAllUnreadCommentsCount
     */
    public function setItemAllUnreadCommentsCount($itemAllUnreadCommentsCount): void
    {
        $this->itemAllUnreadCommentsCount = $itemAllUnreadCommentsCount;
    }

    /**
     * @return mixed
     */
    public function getItemLastCommentDate()
    {
        return $this->itemLastCommentDate;
    }

    /**
     * @param mixed $itemLastCommentDate
     */
    public function setItemLastCommentDate($itemLastCommentDate): void
    {
        $this->itemLastCommentDate = $itemLastCommentDate;
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
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * @param mixed $itemName
     */
    public function setItemName($itemName): void
    {
        $this->itemName = $itemName;
    }

    /**
     * @return mixed
     */
    public function getItemCommentComments()
    {
        return $this->itemCommentComments;
    }

    /**
     * @param mixed $itemCommentComments
     */
    public function setItemCommentComments($itemCommentComments): void
    {
        $this->itemCommentComments = $itemCommentComments;
    }
}