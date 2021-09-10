<?php

namespace first {
    class product{
        public function __construct() {
            // echo "This is Product class<br>";
            $test = new \second\product;
        }
    }

    function wow() {
        echo "wow from first<br>";
    }
}

?>