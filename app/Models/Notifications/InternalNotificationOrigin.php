<?php

namespace Matican\Models\Notifications;


use Matican\Core\Concepts\CRUDActions;
use Matican\Core\DataTypes\MachineName;

class InternalNotificationOrigin extends CRUDActions
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
     * @param InternalNotification
     */
//    private $internalNotifications;

    public function __construct()
    {
//        $this->internalNotifications = [];
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
     * @return InternalNotificationOrigin
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
     * @return InternalNotificationOrigin
     */
    public function setMachineName(MachineName $machine_name)
    {
        $this->machine_name = $machine_name;

        return $this;
    }

    /**
     * @return InternalNotification[]
     */
    public function getInternalNotifications()
    {
//        return $this->internalNotifications;
    }
}
