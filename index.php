<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$car = new Car('green', 4, 'electric');

echo $car->forward();
var_dump($car);
var_dump(Car::ALLOWED_ENERGIES);

$myTruck = new Truck('blue', 'fuel', 50, 3);

$myTruck->forward();
$myTruck->getCurrentSpeed();
$myTruck->setNbWheels(8);
$myTruck->setLoading(40);
echo $myTruck->loadingLevel();
var_dump($myTruck);
$myTruck->brake();
var_dump($myTruck);

$yourTruck = new Truck('golden', 'electric', 100, 1);

$yourTruck->forward();
$yourTruck->getCurrentSpeed();
$yourTruck->setNbWheels(8);
$yourTruck->setLoading(101);
var_dump($yourTruck);
echo $yourTruck->loadingLevel();




