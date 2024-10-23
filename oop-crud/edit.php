<?php
require_once 'Database.php';
$db = new Database();

$id = $_GET['id'];
$user = $db->getById($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $db->update($id, $name, $email);
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Edit User</h1>
    <form action="edit.php?id=<?php echo $id; ?>" method="POST">
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $user['name']; ?>" required><br>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $user['email']; ?>" required><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
