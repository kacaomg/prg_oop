<?php

class Vehicle {

    public $model;
    public $color;
    public $gas_in_tank;
    public $consumption;

    public function __construct($model, $color, $gas, $consumption) {
        $this->model = $model;
        $this->color = $color;
        $this->gas_in_tank = $gas;
        $this->consumption = $consumption;
    }

    public function kilometresToGas() {
        return ($this->gas_in_tank / $this->consumption) * 100;
    }
}
