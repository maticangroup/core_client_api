<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/12/2019
 * Time: 11:27 AM
 */

namespace Matican\FormModels\Delivery;


class WeekDayModel
{
    private $weekDayId;
    private $weekDayName;
    private $weekDayMachineName;
    private $weekDayQueues;
    private $weekDayDate;

    /**
     * @return mixed
     */
    public function getWeekDayId()
    {
        return $this->weekDayId;
    }

    /**
     * @param mixed $weekDayId
     */
    public function setWeekDayId($weekDayId): void
    {
        $this->weekDayId = $weekDayId;
    }

    /**
     * @return mixed
     */
    public function getWeekDayName()
    {
        return $this->weekDayName;
    }

    /**
     * @param mixed $weekDayName
     */
    public function setWeekDayName($weekDayName): void
    {
        $this->weekDayName = $weekDayName;
    }

    /**
     * @return mixed
     */
    public function getWeekDayMachineName()
    {
        return $this->weekDayMachineName;
    }

    /**
     * @param mixed $weekDayMachineName
     */
    public function setWeekDayMachineName($weekDayMachineName): void
    {
        $this->weekDayMachineName = $weekDayMachineName;
    }

    /**
     * @return mixed
     */
    public function getWeekDayQueues()
    {
        return $this->weekDayQueues;
    }

    /**
     * @param mixed $weekDayQueues
     */
    public function setWeekDayQueues($weekDayQueues): void
    {
        $this->weekDayQueues = $weekDayQueues;
    }

    /**
     * @return mixed
     */
    public function getWeekDayDate()
    {
        return $this->weekDayDate;
    }

    /**
     * @param mixed $weekDayDate
     */
    public function setWeekDayDate($weekDayDate): void
    {
        $this->weekDayDate = $weekDayDate;
    }
}