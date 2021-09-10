<?php
class calculation {
    public $a, $b, $c;

    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

$c1 = new Calculation();
$c1->a = 10;
$c1->b = 20;

$c2 = new Calculation();
$c2->a = 10;
$c2->b = 20;


echo "Sum" . $c1->sum();
echo "<br>";
echo "Sub" . $c2->sub();
?>