<?php
class abc {
    public function __construct() {
        echo "This is Construct function<br>";
    }

    public function Hello() {
        echo "Hello function <br>";
    }

    public function __destruct() {
        echo "this is destruct function<br>";
    }
}

$test = new abc();

$test->Hello();
$test->Hello();
?>