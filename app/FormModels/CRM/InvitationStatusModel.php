<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/19/2019
 * Time: 6:28 PM
 */

namespace App\FormModels\CRM;


class InvitationStatusModel
{
    private $invitationStatusId;
    private $invitationStatusName;
    private $invitationStatusMachineName;
    private $invitationStatusColor;
    private $invitationId;

    /**
     * @return mixed
     */
    public function getInvitationStatusId()
    {
        return $this->invitationStatusId;
    }

    /**
     * @param mixed $invitationStatusId
     */
    public function setInvitationStatusId($invitationStatusId): void
    {
        $this->invitationStatusId = $invitationStatusId;
    }

    /**
     * @return mixed
     */
    public function getInvitationStatusName()
    {
        return $this->invitationStatusName;
    }

    /**
     * @param mixed $invitationStatusName
     */
    public function setInvitationStatusName($invitationStatusName): void
    {
        $this->invitationStatusName = $invitationStatusName;
    }

    /**
     * @return mixed
     */
    public function getInvitationStatusMachineName()
    {
        return $this->invitationStatusMachineName;
    }

    /**
     * @param mixed $invitationStatusMachineName
     */
    public function setInvitationStatusMachineName($invitationStatusMachineName): void
    {
        $this->invitationStatusMachineName = $invitationStatusMachineName;
    }

    /**
     * @return mixed
     */
    public function getInvitationStatusColor()
    {
        return $this->invitationStatusColor;
    }

    /**
     * @param mixed $invitationStatusColor
     */
    public function setInvitationStatusColor($invitationStatusColor): void
    {
        $this->invitationStatusColor = $invitationStatusColor;
    }

    /**
     * @return mixed
     */
    public function getInvitationId()
    {
        return $this->invitationId;
    }

    /**
     * @param mixed $invitationId
     */
    public function setInvitationId($invitationId): void
    {
        $this->invitationId = $invitationId;
    }
}