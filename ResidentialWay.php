<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{

    protected $nbLane = 2;

    protected $maxSpeed = 50;

    public function addVehicle($vehicle)
    {
        // TODO: Implement addVehicle() method.
        if ($vehicle instanceof Vehicle) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}