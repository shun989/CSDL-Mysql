<?php
include_once "database/Database.php";

$database = new Database();
$conn = $database->connect();

$sql = "SELECT * FROM categories";
$stmt = $conn->query($sql);
$categories = $stmt->fetchAll();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="database/table.css">
</head>
<style>
    .menu {
        background-color: greenyellow;
    }
</style>
<body>
<form>
    <fieldset>
        <a href="librarian/signup.php">Đăng ký</a>
        <a href="librarian/login.php">Đăng nhập</a>
    </fieldset>
</form>
<div>
    <h1>Library Manager</h1>
    <fieldset>
        <table border="">
            <h3>Category List</h3>
            <br/><br/>
            <tr class="menu">
                <th>STT</th>
                <th>Code</th>
                <th>Category Name</th>
            </tr>
            <?php foreach ($categories as $key => $category): ?>
                <tr>
                    <td><?php echo $key + 1 ?></td>
                    <td><?php echo $category['code'] ?></td>
                    <td><?php echo $category['name'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </fieldset>
</div>
</body>
</html>
