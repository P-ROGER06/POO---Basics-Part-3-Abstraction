<?php

require 'HighWay.php';

require 'ResidentialWay.php';

require 'PedestrianWay.php';

require 'MotorWay.php';

require 'Bicycle.php';

$road = new PedestrianWay ();

$bicycle = new Bicycle('blue', 1);

$road->addVehicle($bicycle);



$velo = new Bicycle('red', 1);

$road->addVehicle($velo);




require_once 'Car.php';

$car = new Car('green', 4, 'electric');

$road->addVehicle($car);




require_once 'Truck.php';

$truck = new Truck('white', 2, 80);

$road->addVehicle($truck);

var_dump($road->getCurrentVehicles());


/*var_dump($truck);*/





















/*$truck->setCurrentSpeed(30);

echo $truck->forward();

echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';

echo $truck->brake();

echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';

echo $truck->brake(). '<br>'. '<br>';

$truck->setStorage(0);

echo '<br> Chargement : ' . $truck->getStorage() . ' m3' . '<br>';

echo $truck->cargo(). '<br>';

$truck->setStorage(25);

echo '<br> Chargement: ' . $truck->getStorage() . ' m3' . '<br>';

echo $truck->cargo(). '<br>';

$truck->setStorage(80);

echo '<br> Chargement: ' . $truck->getStorage() . ' m3' . '<br>';

echo $truck->cargo();*/