<?php 
class Animals {
    public $name;
    public $color;

    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    public function intro(){
        echo "The $this->name is $this->color<br>";
}
}
class Dog extends Animals {
    public function message() {
        echo "am I a Dog or a cat ? ";
    }
}

$dog = new Dog("Dog", "black");
$dog->message();
$dog->intro();
?>