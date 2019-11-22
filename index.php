<?php

require_once 'HighWay.php';
require_once 'Vehicle.php';
require_once 'LightableInterface.php';
require_once 'Truck.php';
require_once 'Car.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'MotorWay.php';
require_once 'Bicycle.php';
require_once 'Skateboard.php';
require_once 'Speedometer.php';

$truck = new Truck('red', 3, 40,10);
$car = new Car('blue', 4, 'fuel');
$bike = new Bicycle('green', 1);
$skate = new Skateboard('red', 1);

$motor5 = new MotorWay();
$motor5->addVehicle($truck);
$motor5->addVehicle($car);
$motor5->addVehicle($bike);
$motor5->addVehicle($skate);

$residential2 = new ResidentialWay();
$residential2->addVehicle($truck);
$residential2->addVehicle($car);
$residential2->addVehicle($bike);
$residential2->addVehicle($skate);

$pedestrian9 = new PedestrianWay();
$pedestrian9->addVehicle($truck);
$pedestrian9->addVehicle($car);
$pedestrian9->addVehicle($bike);
$pedestrian9->addVehicle($skate);

echo Speedometer::convertKmToMiles(10) . '<br>';

echo Speedometer::convertMilesToKm(10);

