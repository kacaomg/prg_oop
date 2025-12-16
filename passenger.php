<?php


class Person {

public $name;
public $inteligence;
public $gender;
public $age;

function __construct($n, $i, $g, $a) {
    $this->name = $n;
    $this->inteligence = $i;
    $this->gender = $g;
    $this->age = $a;
    }

public function sayHello() {
echo "<br> Ahoj, jmenuji se" . $this->name;
echo "<br> Je mi " . $this->age . " let.";
    }
}