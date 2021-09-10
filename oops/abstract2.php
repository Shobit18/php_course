<?php
abstract class ParentClass {
    // abtract method with an argument
    abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
    // the child class may define optional arguments
    public function prefixName($name, $seprator = ".", $greet = "Dear"){
        if($name == "John Doe") {
            $prefix = "Mr";
        } elseif ($name == "Jane Doe" ){
            $prefix = "Mrs";
        } else {
            $prefix = "";
        }
        return "{$greet} {$prefix}{$seprator}{$name}";
    }
}
$class = new ChildClass;
echo $class->prefixName("Jone Doe");
echo "<br>";
echo $class->prefixName("Jane Doe");
?>