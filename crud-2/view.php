<?php
$connection = mysqli_connect('localhost','root','','crud_2');
if(!$connection){
    die ('Not Connected.' .mysqli_error($connection));
}

$query = "SELECT * FROM users";

$result =mysqli_query($connection, $query);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Table</title>
    <link rel="stylesheet" href="view.css">
</head>
<body>

<h2>User List Table</h2>

<table id="userTable">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // view data fetch from database
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>
                    <a href='edit.php?id=" . $row['id'] . "'>Edit</a> |
                    <a href='delete.php?id=" . $row['id'] . "'>Delete</a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>

<?php
// database connection close
mysqli_close($connection);
?>
