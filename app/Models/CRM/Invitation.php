<?php

namespace App\Models\CRM;

use App\Core\Concepts\CRUDActions;
use App\Models\Repository\Person;

class Invitation extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param Person
     */
    private $caller;

    /**
     * @param Person
     */
    private $invited;

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
    public function getCaller()
    {
        return $this->caller;
    }

    /**
     * @param Person $caller
     * @return $this
     */
    public function setCaller(Person $caller)
    {
        $this->caller = $caller;

        return $this;
    }

    /**
     * @return Person
     */
    public function getInvited()
    {
        return $this->invited;
    }

    /**
     * @param Person $invited
     * @return $this
     */
    public function setInvited(Person $invited)
    {
        $this->invited = $invited;

        return $this;
    }
}
