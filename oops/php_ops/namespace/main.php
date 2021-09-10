<?php
require 'first.php';
require 'second.php';


function wow() {
    echo "wow from first<br>";
}
$obj = new first\product();
// $obj2 = new second\product();


first\wow();

?>