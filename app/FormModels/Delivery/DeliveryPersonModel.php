<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/12/2019
 * Time: 5:29 PM
 */

namespace App\FormModels\Delivery;


class DeliveryPersonModel
{
    private $deliveryPersonId;
    private $deliveryPersonFirstName;
    private $deliveryPersonLastName;
    private $deliveryPersonMobile;
    private $deliveryPersonStatus;
    private $deliveryPersonClearAmount;
    private $deliveryPersonDeliveryMethods;
    private $deliveryPersonDeliveryMethodId;
    private $deliveryPersonDispatches;
    private $deliveryPersonDispatchCount;
    private $deliveryPersonAllowedDistricts;
    private $personId;
    private $dispatchId;
    private $dispatchPayments;

    /**
     * @return mixed
     */
    public function getDeliveryPersonId()
    {
        return $this->deliveryPersonId;
    }

    /**
     * @param mixed $deliveryPersonId
     */
    public function setDeliveryPersonId($deliveryPersonId): void
    {
        $this->deliveryPersonId = $deliveryPersonId;
    }

    /**
     * @return mixed
     */
    public function getDeliveryPersonFirstName()
    {
        return $this->deliveryPersonFirstName;
    }

    /**
     * @param mixed $deliveryPersonFirstName
     */
    public function setDeliveryPersonFirstName($deliveryPersonFirstName): void
    {
        $this->deliveryPersonFirstName = $deliveryPersonFirstName;
    }

    /**
     * @return mixed
     */
    public function getDeliveryPersonLastName()
    {
        return $this->deliveryPersonLastName;
    }

    /**
     * @param mixed $deliveryPersonLastName
     */
    public function setDeliveryPersonLastName($deliveryPersonLastName): void
    {
        $this->deliveryPersonLastName = $deliveryPersonLastName;
    }

    /**
     * @return mixed
     */
    public function getDeliveryPersonMobile()
    {
        return $this->deliveryPersonMobile;
    }

    /**
     * @param mixed $deliveryPersonMobile
     */
    public function setDeliveryPersonMobile($deliveryPersonMobile): void
    {
        $this->deliveryPersonMobile = $deliveryPersonMobile;
    }

    /**
     * @return mixed
     */
    public function getDeliveryPersonStatus()
    {
        return $this->deliveryPersonStatus;
    }

    /**
     * @param mixed $deliveryPersonStatus
     */
    public function setDeliveryPersonStatus($deliveryPersonStatus): void
    {
        $this->deliveryPersonStatus = $deliveryPersonStatus;
    }

    /**
     * @return mixed
     */
    public function getDeliveryPersonClearAmount()
    {
        return $this->deliveryPersonClearAmount;
    }

    /**
     * @param mixed $deliveryPersonClearAmount
     */
    public function setDeliveryPersonClearAmount($deliveryPersonClearAmount): void
    {
        $this->deliveryPersonClearAmount = $deliveryPersonClearAmount;
    }

    /**
     * @return mixed
     */
    public function getDeliveryPersonDeliveryMethods()
    {
        return $this->deliveryPersonDeliveryMethods;
    }

    /**
     * @param mixed $deliveryPersonDeliveryMethods
     */
    public function setDeliveryPersonDeliveryMethods($deliveryPersonDeliveryMethods): void
    {
        $this->deliveryPersonDeliveryMethods = $deliveryPersonDeliveryMethods;
    }

    /**
     * @return mixed
     */
    public function getDeliveryPersonDeliveryMethodId()
    {
        return $this->deliveryPersonDeliveryMethodId;
    }

    /**
     * @param mixed $deliveryPersonDeliveryMethodId
     */
    public function setDeliveryPersonDeliveryMethodId($deliveryPersonDeliveryMethodId): void
    {
        $this->deliveryPersonDeliveryMethodId = $deliveryPersonDeliveryMethodId;
    }

    /**
     * @return mixed
     */
    public function getDeliveryPersonDispatches()
    {
        return $this->deliveryPersonDispatches;
    }

    /**
     * @param mixed $deliveryPersonDispatches
     */
    public function setDeliveryPersonDispatches($deliveryPersonDispatches): void
    {
        $this->deliveryPersonDispatches = $deliveryPersonDispatches;
    }

    /**
     * @return mixed
     */
    public function getDeliveryPersonDispatchCount()
    {
        return $this->deliveryPersonDispatchCount;
    }

    /**
     * @param mixed $deliveryPersonDispatchCount
     */
    public function setDeliveryPersonDispatchCount($deliveryPersonDispatchCount): void
    {
        $this->deliveryPersonDispatchCount = $deliveryPersonDispatchCount;
    }

    /**
     * @return mixed
     */
    public function getDeliveryPersonAllowedDistricts()
    {
        return $this->deliveryPersonAllowedDistricts;
    }

    /**
     * @param mixed $deliveryPersonAllowedDistricts
     */
    public function setDeliveryPersonAllowedDistricts($deliveryPersonAllowedDistricts): void
    {
        $this->deliveryPersonAllowedDistricts = $deliveryPersonAllowedDistricts;
    }

    /**
     * @return mixed
     */
    public function getPersonId()
    {
        return $this->personId;
    }

    /**
     * @param mixed $personId
     */
    public function setPersonId($personId): void
    {
        $this->personId = $personId;
    }

    /**
     * @return mixed
     */
    public function getDispatchId()
    {
        return $this->dispatchId;
    }

    /**
     * @param mixed $dispatchId
     */
    public function setDispatchId($dispatchId): void
    {
        $this->dispatchId = $dispatchId;
    }

    /**
     * @return mixed
     */
    public function getDispatchPayments()
    {
        return $this->dispatchPayments;
    }

    /**
     * @param mixed $dispatchPayments
     */
    public function setDispatchPayments($dispatchPayments): void
    {
        $this->dispatchPayments = $dispatchPayments;
    }
}