<?php
require_once 'Database.php';
$db = new Database();
$id = $_GET['id'];
$db->delete($id);
header("Location: index.php");
?>
