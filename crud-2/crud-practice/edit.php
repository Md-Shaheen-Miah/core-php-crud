

<?php
$conn =mysqli_connect('localhost','root','','crudpractice');
if($conn){
    echo "database connected";
}else{
    echo "Not connected";
}

if(isset($_GET['id'])){
    $_GET['id'];

    $query="SELECT * FROM users WHERE id=$id";
    $result=mysqli_query($conn,$query);

    if($result){
        $user= mysqli_fetch_assoc($result);
    }else{
        echo "query failed";
      
    }

    
}

if(isset($_POST['update'])){
    $name =$_POST['name'];
    $email =$_POST['email'];

    $query="UPDATE users SET name='$name', email='$email' WHERE id =$id";

    $result=mysqli_query($conn,$query);
    if($result){
        echo "Data Updated.";
        header("Location:view.php");
    }else{
        echo "update failed";
    }
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
mysqli_close($conn);
?>
