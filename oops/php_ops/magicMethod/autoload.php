<?php
 function sql_autoload_register($class) {
     require "Classes/". $class . ".php";
 }


 $test = new second();
?>