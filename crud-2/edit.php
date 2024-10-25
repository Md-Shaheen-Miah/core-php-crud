<?php

$connection = mysqli_connect('localhost', 'root', '', 'crud_2');

if(isset($_GET['id'])){
    $id =$_GET['id'];

    $query = "SELECT * FROM users WHERE id=$id";
    $result =mysqli_query($connection, $query);
    if ($result) {
        $user = mysqli_fetch_assoc($result);
    } else {
        die("Query failed: " . mysqli_error($connection));
    }
}

if(isset($_POST['update'])){

    $name =$_POST['name'];
    $email =$_POST['email'];

    $query = "UPDATE users SET name = '$name', email = '$email' WHERE id = $id";
  
    $result = mysqli_query($connection,$query);
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>


<h1>Update Table</h1>
<form method="POST">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" value="<?php echo $user['name']; ?>" required><br><br>
    
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>" required><br><br>
    
    <input type="submit" name="update" value="Update">
</form>

</body>
</html>

<?php
// database connection close
mysqli_close($connection);
?>
