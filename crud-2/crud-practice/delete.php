<?php
$conn =mysqli_connect('localhost','root', '', 'crudpractice');
if(!$conn){
    die ("NOT CONNECTED." .mysqli_error($conn));
}

if(isset($_GET['id'])){
    $id =$_GET['id'];

    $query ="DELETE FROM users WHERE id = $id";

    $result =mysqli_query($conn,$query);
    if($result){
        echo "data deleted.";
    }else{
        echo "data not deleted";
    }
}


mysqli_close($conn);
?>