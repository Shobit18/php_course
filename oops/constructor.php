<?php 
class Animals {
    public $name;
    public $color;

    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    function getName() {
        return $this->name;
    }

    function getColor() {
        return $this->color;
    }
}

$ani = new Animals("Dog", "black"); 
echo $ani->getName();

echo " is " .$ani->getColor();

?>