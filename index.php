<?php
include "Person.php";
include "Car.php";

$p1 = new Person("Pavel", 100, 1, 40);
$car1 = new Car("Skoda", "cervena", 50, 6);

$car1->boardPerson($p1);
$car1->person->sayHello();
