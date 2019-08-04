<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/1/2019
 * Time: 7:01 PM
 */

namespace App\FormModels\Repository;


class OffDayModel
{
    private $offDayID;
    private $offDayDate;
    private $offDayYear;
    private $offDayMonth;
    private $offDayDay;
    private $offDayReason;
    private $offDayCreatePerson;
    private $offDayCreateDate;

    /**
     * @return mixed
     */
    public function getOffDayID()
    {
        return $this->offDayID;
    }

    /**
     * @param mixed $offDayID
     */
    public function setOffDayID($offDayID): void
    {
        $this->offDayID = $offDayID;
    }

    /**
     * @return mixed
     */
    public function getOffDayYear()
    {
        return $this->offDayYear;
    }

    /**
     * @param mixed $offDayYear
     */
    public function setOffDayYear($offDayYear): void
    {
        $this->offDayYear = $offDayYear;
    }

    /**
     * @return mixed
     */
    public function getOffDayMonth()
    {
        return $this->offDayMonth;
    }

    /**
     * @param mixed $offDayMonth
     */
    public function setOffDayMonth($offDayMonth): void
    {
        $this->offDayMonth = $offDayMonth;
    }

    /**
     * @return mixed
     */
    public function getOffDayDay()
    {
        return $this->offDayDay;
    }

    /**
     * @param mixed $offDayDay
     */
    public function setOffDayDay($offDayDay): void
    {
        $this->offDayDay = $offDayDay;
    }

    /**
     * @return mixed
     */
    public function getOffDayReason()
    {
        return $this->offDayReason;
    }

    /**
     * @param mixed $offDayReason
     */
    public function setOffDayReason($offDayReason): void
    {
        $this->offDayReason = $offDayReason;
    }

    /**
     * @return mixed
     */
    public function getOffDayCreatePerson()
    {
        return $this->offDayCreatePerson;
    }

    /**
     * @param mixed $offDayCreatePerson
     */
    public function setOffDayCreatePerson($offDayCreatePerson): void
    {
        $this->offDayCreatePerson = $offDayCreatePerson;
    }

    /**
     * @return mixed
     */
    public function getOffDayCreateDate()
    {
        return $this->offDayCreateDate;
    }

    /**
     * @param mixed $offDayCreateDate
     */
    public function setOffDayCreateDate($offDayCreateDate): void
    {
        $this->offDayCreateDate = $offDayCreateDate;
    }

    /**
     * @return mixed
     */
    public function getOffDayDate()
    {
        return $this->offDayDate;
    }

    /**
     * @param mixed $offDayDate
     */
    public function setOffDayDate($offDayDate): void
    {
        $this->offDayDate = $offDayDate;
    }
}