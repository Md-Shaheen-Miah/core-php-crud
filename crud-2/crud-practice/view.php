

<?php

$conn =mysqli_connect('localhost','root','','crudpractice');
    if($conn){
        echo "database connected";
    }else{
        echo "Not connected";
    }

    $query="SELECT * FROM users";
    $result =mysqli_query($conn,$query);
    if($result){
        echo "Data Seleted";
    }else{
        echo "Data Not selected";
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
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
       <?php
       while($row = mysqli_fetch_assoc($result)){
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
    </table>
</body>
</html>