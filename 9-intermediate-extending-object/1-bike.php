<?php 

include "classes/bike.php";
include "classes/electric.php";

// Implementación Objecto 1
$bike = new Bike();
echo $bike;
echo "\n";
$bike->go();
echo "\n";
$bike->break();

// Implementación Objecto 2
echo "\n";
$electric = new Electric();
echo $electric;
echo "\n";
$electric->turnOn();
echo "\n";
$electric->go();
echo "\n";
$electric->break();
echo "\n";
$electric->turnOff();
