<?php


abstract class HighWay
{
    abstract public function addVehicle($vehicle);

    protected $currentVehicles = [];

    protected $nbLane;

    protected $maxSpeed;

     /**
     * @param mixed $currentVehicles
     */
    public function setCurrentVehicles($currentVehicles)
    {
        $this->currentVehicles = $currentVehicles;
    }

    /**
     * @return mixed
     */
    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }

    /**
     * @return mixed
     */
    public function getNbLane()
    {
        return $this->nbLane;
    }

    /**
     * @param mixed $nbLane
     */
    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;
    }

    /**
     * @return mixed
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * @param mixed $maxSpeed
     */
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }
}