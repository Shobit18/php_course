<?php
class Person {
    public $name, $age;

    function __construct($name="Krina", $age=22) {
        $this->name = $name;
        $this->age = $age;
    }

    function show() {
        echo $this->name . " - " .$this->age . "\n";
    }
}

$p1 = new Person("shobit", 20);
$p2 = new Person();
$p1->show();

$p2->show();

?>