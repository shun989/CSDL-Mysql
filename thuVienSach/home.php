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
    form {
        margin: 20px;
        float: right;
    }
</style>
<body>
<form method="post">
    <button type="submit" onclick="return confirm('Are you want log uot?')" name="logOut">Đăng xuất</button>
</form>
<div>
    <h1>Library Manager</h1>
    <fieldset>
        <table border="">
            <h3>Category List</h3>
            <a href="view/page-addCategory.php">
                <button style="background-color: green;height: 30px;color: yellow">Add Category List</button>
            </a>
            <br/><br/>
            <tr class="menu">
                <th>STT</th>
                <th>Code</th>
                <th>Category Name</th>
                <th colspan="2">Tùy chọn</th>
            </tr>
            <?php foreach ($categories as $key => $category): ?>
                <tr>
                    <td><?php echo $key + 1 ?></td>
                    <td><?php echo $category['code'] ?></td>
                    <td><?php echo $category['name'] ?></td>
                    <td><a href="view/page-editCategory.php?id=<?php echo $category['id'] ?>"
                           onclick="return confirm('Bạn muốn thay đổi thông tin?')">
                            <button style="background-color: yellow">Update</button></a></td>
                    <td><a href="function/delete-category.php?id=<?php echo $category['id'] ?>"
                           onclick=" return confirm('Bạn muốn xóa?')">
                            <button style="background-color: red">Delete</button></a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </fieldset>
</div>
</body>
</html>

