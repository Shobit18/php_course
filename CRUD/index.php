<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "students";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Sorry Database not connected--->" .mysqli_error());
} else {
    echo " Database Connect successfully<br>";
}

$sql = "CREATE DATABASE `students`";

$result = mysqli_query($conn, $sql);
if($result) {
    echo "Database Created succefully<br>";
} else {
    echo "Error! Please check again<br>";
}

// crate table

$sql = "CREATE TABLE `details` (`rno` INT(10) AUTO_INCREMENT, `fname` VARCHAR(20), `lname` VARCHAR(20), `DOB` DATE, `place` VARCHAR(30), PRIMARY KEY(rno))";
$result = mysqli_query($conn, $sql);
if($result) {
    echo "Table Created succefully<br>";
} else {
    echo "Error! Please check again<br>";
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $DOB = $_POST["DOB"];
    $place = $_POST["place"];
}
$sql = "INSERT INTO `details` (`rno`, `fname`, `lname`, `DOB`, `place`) VALUES ('$fname', '$lname', '$DOB', $place)";
$result = mysqli_query($conn, $sql);
if($result) {
    echo "Insert data succefully<br>";
} else {
    echo "Error! Please check again<br>";
}


// $sql = "UPDATE `details` SET `fname`='Shobit',`lname`='Kunwar' WHERE `rno`= 1";
// $result = mysqli_query($conn, $sql);
// if($result) {
//     echo "Update data succefully<br>";
// } else {
//     echo "Error! Please check again<br>";
// }

// $sql = "DELETE FROM `details` WHERE `rno`=6";

// $result = mysqli_query($conn, $sql);
// if($result) {
//     echo "Delete data succefully<br>";
// } else {
//     echo "Error! Please check again<br>";
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/CRUD/index.php" method="POST">
    <label>Enter First Name: </label>
    <input type= "text" name="lname" ><br>
    <label>Enter Last Name: </label>
    <input type= "text" name="fname" ><br>
    <label>Enter Date of Birth: </label>
    <input type= "text" name="DOB" ><br>
    <label>Enter Your City: <label>
    <input type= "text" name="place" ><br>
    <input type="submit">

</form>
    
</body>
</html>

