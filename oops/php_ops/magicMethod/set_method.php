<?php
class student {
    private $name;
    public function Hello() {
        echo $this->name;
    }

    public function __get($property) {
        echo "You are trying to access Non existing property<br>";
    }

    public function __set($property, $value){
        if(property_exists($this, $property)){
            $this->$property = $value;
        } else {
            echo "Property does not exist: $property";
        }
    }
}

$test = new student();
$test->name = "Shobit Kunwar";

$test->Hello();
?>