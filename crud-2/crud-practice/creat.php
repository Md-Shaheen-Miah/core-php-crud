
<?php

if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $email =$_POST['email'];


    $conn =mysqli_connect('localhost','root','','crudpractice');
    if($conn){
        echo "database connected";
    }else{
        echo "Not connected";
    }

    $query ="INSERT INTO users(name. email) VALUES('$name', '$email')";

    $result =mysqli_query($conn,$query);
    if($result){
        echo "dta inserted";
    }else{
        echo "not inserted.";
    }
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="name">Name:</label><br>
        <input type="text" name="name" placeholder="name" required><br>
        <label for="email">Email:</label><br>
        <input type="email" name="email" placeholder="email" required><br>
        <input type="submit" name="submit" value="submit">
        <a href="view.php">View</a>
    </form>
</body>
</html>