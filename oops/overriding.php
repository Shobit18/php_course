<?php
class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = name;
        $this ->age = age;
    }

    public function intro() {
        echo "The Person name is $this->name and his age is $this->age .";       
    }
}

class Man extends Person {
    public $weight;
    public function __construct($name, $age, $weight){
        $this->name = $name;
        $this ->age = $age;
        $this->weight = $weight;
    }
    public function intro() {
        echo "The Person name is $this->name and his age is $this->age and his weight is $this->weight";
    }
}

$man = new Man("Shobit", "22","60");
$man->intro();
?>