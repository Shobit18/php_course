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

    // $sql = "CREATE DATABASE `students`";

    // $result = mysqli_query($conn, $sql);
    // if($result) {
    //     echo "Database Created succefully<br>";
    // } else {
    //     echo "Error! Please check again<br>";
    // }

?>