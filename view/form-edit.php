<?php
include_once "../database/Database.php";
$database = new Database();
$conn = $database->connect();

$id =$_REQUEST['id'];
$sql = "SELECT name,email,phone,address from users WHERE id=$id";

$stmt = $conn->query($sql);
$users = $stmt->fetchAll();
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
<body>
<h2>Sửa thông tin</h2>
<a href="../index.php">Back</a><br/>
<form action="../function/edit.php?id=<?php echo $id ?>" method="post">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" pattern="\w\s\{2,50}$" title="Tối đa 50 ký tự." placeholder="Nhập tên">
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" pattern="^[a-z]\w[^A-Z]?=\@{50}$" title=" Sai ngữ pháp !"
                       placeholder="Nhập email"></td>
        </tr>
        <tr>
            <td>Điện thoại</td>
            <td><input type="text" name="phone" pattern="^[0+]\d{9,11}$" title="Số điện thoại daif từ 10 -12 số."
                       placeholder="Nhập số điện thoại"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="address" placeholder="Nhập địa chỉ"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit" name="edit_user">Lưu</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>

