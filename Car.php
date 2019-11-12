<?php

require_once 'Vehicle.php';

class Car extends Vehicle implements LightableInterface
{
    public function switchOn()
    {
       return true;
    }

    public function switchOff()
    {
        return false;
    }

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    private $start = false;

    private $hasParkBrake = true;

    public function setParkBrake()
    {
        if ($this -> hasParkBrake == true)
        {
            $this -> hasParkBrake = false;
        } else {
            $this ->hasParkBrake = true;
        }
    }

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function start()
    {
        if ($this -> hasParkBrake == true)
        {
            $this -> start = false;
            throw new Exception('ParkBrake is active');
        } else {
            $this -> start = true;
        }
    }
}