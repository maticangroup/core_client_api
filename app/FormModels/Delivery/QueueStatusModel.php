<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/12/2019
 * Time: 12:02 PM
 */

namespace Matican\FormModels\Delivery;


class QueueStatusModel
{
    private $queueStatusId;
    private $queueStatusName;
    private $queueStatusMachineName;
    private $queueStatusColor;
    private $queueId;

    /**
     * @return mixed
     */
    public function getQueueStatusId()
    {
        return $this->queueStatusId;
    }

    /**
     * @param mixed $queueStatusId
     */
    public function setQueueStatusId($queueStatusId): void
    {
        $this->queueStatusId = $queueStatusId;
    }

    /**
     * @return mixed
     */
    public function getQueueStatusName()
    {
        return $this->queueStatusName;
    }

    /**
     * @param mixed $queueStatusName
     */
    public function setQueueStatusName($queueStatusName): void
    {
        $this->queueStatusName = $queueStatusName;
    }

    /**
     * @return mixed
     */
    public function getQueueStatusMachineName()
    {
        return $this->queueStatusMachineName;
    }

    /**
     * @param mixed $queueStatusMachineName
     */
    public function setQueueStatusMachineName($queueStatusMachineName): void
    {
        $this->queueStatusMachineName = $queueStatusMachineName;
    }

    /**
     * @return mixed
     */
    public function getQueueStatusColor()
    {
        return $this->queueStatusColor;
    }

    /**
     * @param mixed $queueStatusColor
     */
    public function setQueueStatusColor($queueStatusColor): void
    {
        $this->queueStatusColor = $queueStatusColor;
    }

    /**
     * @return mixed
     */
    public function getQueueId()
    {
        return $this->queueId;
    }

    /**
     * @param mixed $queueId
     */
    public function setQueueId($queueId): void
    {
        $this->queueId = $queueId;
    }
}