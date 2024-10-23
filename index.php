<?php


if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];

  $connection = mysqli_connect('localhost','root','','php_crud');

  if(!$connection ){
  die("Database Not Connected." . mysqli_error($connection));
}

$query = "INSERT INTO users(name,email) VALUES ('$name','$email')";

$result = mysqli_query($connection, $query);

if($result){
  echo "Data Inserted.";
}else{
  echo "Data Not Inserted.";
}
}
?>





<!DOCTYPE html>
<html>
<link rel="stylesheet" href="index.css">
<body>

<h2>User Creat Form</h2>

<form method="POST">
  <label for="fname"> Name:</label><br>
  <input type="text" id="name"  name="name" placeholder="Name" required><br>
  <label for="lname">Email:</label><br>
  <input type="email" id="email" name="email" placeholder="Email" required><br><br>
  <input type="submit" name="submit" value="Submit">
  <a href="view.php">View</a>
</form> 



</body>
</html>

