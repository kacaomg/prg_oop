<?php


class Car {

public $model;
public $color;
public $gas_in_tank;
public $consumption;
public $person = null;


function __construct($m, $c, $g, $cons) {
    $this->model = $m;
    $this->color = $c;
    $this->gas_in_tank = $g;
    $this->consumption = $cons;
    }

public function kilometresToGas($kilometres) {
    return $this->gas_in_tank;
}
public function boardPerson($person) {
    $this->person = $person;
}
}