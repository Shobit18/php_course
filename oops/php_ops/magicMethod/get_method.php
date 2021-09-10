<?php
class abc {

    // private $name = "Shobit Kunwar";

    // public function Hello() {
    //     echo "Hello" .$this->name;
    // }

    // public function __get($property) {
    //     echo "Your are try to access private and No exist method<br>";
    // }

    public $data = ["name"=>"Shobit", "course"=>"PHP", "price"=>"200"];

    public function __get($key) {
        if(array_key_exists($key, $this->data)) {
            return $this->data[$key];
        } else {
            return "This key($key) is not defined";
        }
    }
}

$test = new abc();
// echo $test->name;
print_r($test->data);
?>