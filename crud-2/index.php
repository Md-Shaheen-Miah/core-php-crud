<?php 
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $connection = mysqli_connect('localhost', 'root', '', 'crud_2');
    if (!$connection) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $query = "INSERT INTO users(name, email) VALUES('$name', '$email')";
    $result = mysqli_query($connection, $query);

    if ($result) {
        // Redirect to the same page to prevent form re-submission
        header("Location: " . $_SERVER['view.php']);
        exit();
    } else {
        echo "Data not inserted: " . mysqli_error($connection);
    }

    mysqli_close($connection);
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<h2>User Create Form</h2>

<form method="POST">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" placeholder="Name" required><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" placeholder="Email" required><br><br>
    <input type="submit" name="submit" value="Submit">
    <a href="view.php">View</a>
</form> 

</body>
</html>
