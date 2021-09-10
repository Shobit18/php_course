<?php 
class employee {
    public $name;
    public $age;
    public $salary;

    function __construct($n, $a, $s){
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    function info() {
        echo "<h3> Employee Profile</h3>";
        echo "Name : " .$this->name. "<br>";
        echo "Age : " .$this->age. "<br>";
        echo "Salary : " .$this->salary. "<br>";
    }
}

class manager extends employee {
    public $ta = 1000;
    public $phone = 300;
    public $totalSalary;

    function info() {
        $this->totalSalary = $this->$salary + $this-$ta + $this->phone;
        
            echo "<h3> Employee Profile</h3>";
            echo "Name : " .$this->name. "<br>";
            echo "Age : " .$this->age. "<br>";
            echo "Salary : " .$this->salary. "<br>";
        
    }

}
$e1 = new employee("Shobit", 22, 2000);
$e2 = new manager("sk", 23, 22000);
$e1->info();
$e2->info();
?>