<?php
class abc {
    public function first() {
        echo "this is first<br>";
        return $this;
    }

    public function second() {
        echo "this is second<br>";
        return $this;
    }
    public function third() {
        echo "this is third<br>";
        
    }
}

$test = new abc();

$test->first()->second()->third();
?>