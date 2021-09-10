<?php
class Animals {
    public $name;
    public $color;


    function setName($name) {
        $this->name = $name;
    }

    function getName() {
        return $this->name;
    }

    function setColor($color) {
        $this->color = $color;
    }
    function getColor() {
        return $this->color;
    }
}

$animal = new Animals();
$animal->setName('Dog ');
echo $animal->getName();
$animal->setColor('black');
echo "is ".$animal->getColor(); 
?>