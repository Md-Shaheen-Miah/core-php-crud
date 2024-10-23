<?php
// database connection
$connection = mysqli_connect('localhost', 'root', '', 'php_crud');

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

//received id parametre from url
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    //delete query
    $query = "DELETE FROM users WHERE id = $id";
    $result = mysqli_query($connection, $query);

    if ($result) {
        echo "User Deleted Successfully!";
        header("Location: view.php"); // delete then redirect to view page
    } else {
        echo "Failed to Delete User: " . mysqli_error($connection);
    }
} else {
    echo "Invalid Request!";
}

// database connetion close
mysqli_close($connection);
?>
