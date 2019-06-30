<?php

namespace App\Models\Accounting;


use App\Core\Concepts\CRUDActions;
use App\Core\DataTypes\MachineName;

class GiftCardGroupStatus extends CRUDActions
{
    /**
     * @param integer
     */
    private $id;

    /**
     * @param string
     */
    private $name;

    /**
     * @param MachineName
     */
    private $machine_name;

    /**
     * @param GiftCardGroup
     */
    private $gift_card_groups;

    public function __construct()
    {
        $this->gift_card_groups =[];
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return MachineName
     */
    public function getMachineName()
    {
        return $this->machine_name;
    }

    /**
     * @param MachineName $machine_name
     * @return GiftCardGroupStatus
     */
    public function setMachineName(MachineName $machine_name)
    {
        $this->machine_name = $machine_name;

        return $this;
    }

    /**
     * @return GiftCardGroup[]
     */
    public function getGiftCardGroups()
    {
        return $this->gift_card_groups;
    }
}
