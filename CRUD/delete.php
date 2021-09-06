<?php
require '_connect.php';

$rno = $_GET['rno'];

$result = "DELETE FROM `details` WHERE rno = $rno";

mysqli_query($conn, $result);

header('location:show.php');
?>