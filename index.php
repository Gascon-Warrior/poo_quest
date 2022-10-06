<?php
require_once 'Bicycle.php';
require_once 'Car.php';
$bike = new Bicycle('Green');
$car1 = new Car('Red', 4, 'Gasol');

var_dump($car1);

echo $car1->start();
echo $car1->forward();
echo $car1->brake();

var_dump($car1);



$bike->setCurrentSpeed(100);
// $bike->dump();





// echo $bike->forward();
// echo '<br> vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
// echo $bike->brake();
// echo '<br> vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
// echo $bike->brake();
// echo $bike->forward();
// echo '<br> vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';

