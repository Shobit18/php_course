<?php

class Person {
    public $name;
    public $des;

    function __construct($name, $des) {
        $this->name = $name;
        $this->des = $des;  
    }

    function __destruct() {
        echo "The  $this->name  is   $this->des   boy";
    }
}

$per = new Person("Shobit", "Good");

?>