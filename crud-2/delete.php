
<?php
$conn = mysqli_connect('localhost', 'root','','crud_2');


if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query ="DELETE FROM users WHERE id =$id";
    $result = mysqli_query($conn,$query);
    if ($result) {
        echo "User Deleted Successfully!";
        header("Location: view.php"); // delete then redirect to view page
    } else {
        echo "Failed to Delete User: " . mysqli_error($conn);
    }
} else {
    echo "Invalid Request!";
}



mysqli_close($conn);
?>