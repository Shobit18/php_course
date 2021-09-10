<?php
class Animals {
    public $name;
    public $class;


    function animal($name, $color) {
        $this->name = $name;
        $this->color  = $color;
    }

    function getAnimal() {
        return $this-> name . " ". $this->color;
    }
}

$ani = new Animals();
$ani2 = new Animals();
$ani->animal('dog', 'black');
$ani2->animal('cat', 'white');

echo $ani->getAnimal();
echo "<br>";
echo $ani2->getAnimal();

?>