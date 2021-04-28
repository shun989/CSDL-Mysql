<?php

include_once "database/Database.php";

$database = new Database();
$conn = $database->connect();

// b1: viet lenh sql
$sql = 'SELECT * FROM users';

// b2: Vi la cau lenh select -> thuc thi cau lenh

$stmt = $conn->query($sql);
$users = $stmt->fetchAll();

if (isset($_GET["search"]) && !empty($_GET["search"]))
{
    $key = $_GET["search"];
    $sql = "SELECT * FROM users WHERE id LIKE '%$key%' OR name LIKE '%$key%' OR email LIKE '%$key%' OR phone LIKE '%$key%' OR address LIKE '%$key%'";
}
else
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table {
        border: 1px black solid;
        border-collapse: collapse;
        width: 100%;
        height: 30px;
        text-align: center;
    }
</style>
<body>

<a href="view/form-add.php" onclick="return confirm('Are your want add?')">Add User</a><br/>
<table border="1" style="border-collapse: collapse; width: 800px">
    <tr>
        <td>STT</td>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Address</td>
        <td></td>
        <td></td>
    </tr>
    <?php  foreach ($users as $key => $user):?>
    <tr>
        <td><?php echo $key + 1 ?></td>
        <td><?php echo $user['name'] ?></td>
        <td><?php echo $user['email'] ?></td>
        <td><?php echo $user['phone'] ?></td>
        <td><?php echo $user['address'] ?></td>
        <td><a href="function/delete.php?id=<?php echo $user['id'] ?>" onclick="return confirm('Are your sure?')">Delete</a></td>
        <td><a href="view/form-edit.php?id=<?php echo $user['id'] ?>" onclick="return confirm('Are your sure?')">Edit</a></td>
    </tr>

    <?php endforeach; ?>
</table>
</body>
</html>
