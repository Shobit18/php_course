<?php 
 require "_connect.php";

 if(isset($_POST['done'])){

  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $DOB = $_POST["DOB"];
  $place = $_POST["place"];


  $sql = "INSERT INTO `details` (`rno`, `fname`, `lname`, `DOB`, `place`) VALUES (NULL, '$fname', '$lname', '$DOB', '$place');";
  $result = mysqli_query($conn, $sql);
  if($result) {
      echo "Insert data succefully<br>";
  } else {
      echo "Error! Please check again<br>";
  }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>CRUD</title>

</head>
<body>

<div>
  <form method = "POST">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="fname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lname" placeholder="Your last name..">

    <label for="DOB">Birth Date</label>
    <input type="text" id="DOB" name="DOB" placeholder="Date of Birth">

    <label for="country">City</label>
    <input type="text" id="place" name="place" placeholder="City name">

    <input type="submit" value="Submit" name="done">
  </form>
</div>
</body>
</html>