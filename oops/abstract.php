<?php 
abstract class Car {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
    abstract public function intro() : string;
}

// child class
class Altroz extends Car {
    public function intro() : string {
        return "Choose Indian Quality! I'm an $this->name";
    }
}

class Thar extends Car {
    public function intro() : string {
        return "Proud to be Indian! I'm a $this->name";
    }
}
class Audi extends Car {
    public function intro() : string {
        return "German extravagance! I'm a $this->name";
    }   
}
$altroz = new altroz("Altroz");
echo $altroz->intro();
echo "<br>";

$thar = new thar("Thar");
echo $thar->intro();
echo "<br>";

$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";
?>