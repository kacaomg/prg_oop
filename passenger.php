<?php

class Person {

    public $name;
    public $intelligence;
    public $gender;
    public $age;

    public function __construct($name, $intelligence, $gender, $age) {
        $this->name = $name;
        $this->intelligence = $intelligence;
        $this->gender = $gender;
        $this->age = $age;
    }

    public function sayHello() {
        echo "<br>Ahoj, jmenuji se " . $this->name;
        echo "<br>Je mi " . $this->age . " let.";
    }
}
