<?php

namespace Matican\Models\Repository;


use Matican\Core\Concepts\CRUDActions;
use Matican\Core\DataTypes\Date;
use Matican\Core\DataTypes\Text;

class OffDays extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param Date
     */
    private $date;

    /**
     * @param Text
     */
    private $reason;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param Date $date
     * @return OffDays
     */
    public function setDate(Date $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return Text
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param Text $reason
     * @return OffDays
     */
    public function setReason(Text $reason)
    {
        $this->reason = $reason;

        return $this;
    }
}
