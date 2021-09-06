
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
<table id="customers">
  <tr>
    <th>Rno</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Date of Birth</th>
    <th>City</th>
    <th>Delete</th>
    <th>Update</th>
  </tr>

<?php 
        require "_connect.php";

        $sql = "SELECT * FROM `details`";
        $result = mysqli_query($conn, $sql);

        while($res = mysqli_fetch_array($result)) {

?>

  <tr>
  <td><?php echo $res['rno']; ?></td>
  <td><?php echo $res['fname']; ?></td>
  <td><?php echo $res['lname']; ?></td>
  <td><?php echo $res['DOB']; ?></td>
  <td><?php echo $res['place']; ?></td>
  <td><button class ="btn"> <a href = "delete.php?rno=<?php echo $res['rno']; ?>">Delete</a></button></td>
  <td><button class ="btn"> <a href = "update.php?rno=<?php echo $res['rno']; ?>">Update</a></button></td>

  </tr>
    <?php 
        }
    ?>
</table>

</body>
</html>