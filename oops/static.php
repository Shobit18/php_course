<?php
class greeting {
    public static function welcome() {
        echo "Hello World! how are you?";
    } 
    public function __construct() {
        self::welcome();
    }
}

// greeting::welcome();
new greeting();
?>