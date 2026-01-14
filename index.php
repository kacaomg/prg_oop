<?php
include "Person.php";
include "Car.php";

$p1 = new Person("Pavel", 100, 1, 40);
$car1 = new Car("Škoda", "červená", 50, 6);

$car1->boardPerson($p1);

echo "Auto ujede: " . $car1->kilometresToGas() . " km";
$car1->person->sayHello();
