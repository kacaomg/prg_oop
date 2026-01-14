<?php
include_once "Vehicle.php";
include_once "Person.php";

class Car extends Vehicle {

    public $person = null;

    public function __construct($model, $color, $gas, $consumption) {
        parent::__construct($model, $color, $gas, $consumption);
    }

    public function boardPerson(Person $person) {
        $this->person = $person;
    }
}
