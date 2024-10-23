<?php

$connection = mysqli_connect('localhost', 'root', '', 'php_crud');

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

// id parameter fetch from url
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // ডাটাবেস থেকে নির্দিষ্ট id এর ব্যবহারকারীর তথ্য ফেচ করা
    $query = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($connection, $query);

    if ($result) {
        $user = mysqli_fetch_assoc($result);
    } else {
        die("Query failed: " . mysqli_error($connection));
    }
}

// form submit then data update
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // updtae query
    $query = "UPDATE users SET name = '$name', email = '$email' WHERE id = $id";
    $result = mysqli_query($connection, $query);

    if ($result) {
        echo "Data Updated Successfully!";
        header("Location: view.php"); // edit then redirect view page
    } else {
        echo "Failed to Update Data: " . mysqli_error($connection);
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
mysqli_close($connection);
?>
