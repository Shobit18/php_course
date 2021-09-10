<?php 
include 'database.php';

$obj = new Database();

$obj->insert('students', ['name'=>'krina', 'age' => 21, 'city'=>'Pune']);

echo "Insert result is : ";
print_r(obj->getResult());
?>