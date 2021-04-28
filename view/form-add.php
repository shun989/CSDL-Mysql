<?php
//include_once "../database/Database.php";
//include_once "../function/create.php";
//if (!empty($_POST['add_user'])) {  //lay data
//    $data['name'] = isset($_POST['name']) ? $_POST['name'] : '';
//    $data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
//    $data['phone'] = isset($_POST['phone']) ? $_POST['phone'] : '';
//    $data['address'] = isset($_POST['address']) ? $_POST['address'] : '';
//    //kiem tra truong nhap
//    $errors = array();
//    if (empty($data['name'])) {
//        $errors['name'] = 'chua nhap name';
//    }
//    if (empty(['email'])) {
//        $errors['email'] = "chua nhap email";
//    }
//    if (empty($data['phone'])) {
//        $errors['phone'] = "chua nhap so dien thoai";
//    }
//    if (empty(['address'])) {
//        $errors['address'] = " chua nhap dia chi";
//    }
//    //ko co loi thi insert
//    if (!$errors) {
//        add_user($data['name'], $data['email'], $data['phone'], $data['address']);
//    }
//
//}
//?>

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
<a href="../index.php">Back</a><br/>
<form action="../function/create.php" method="post">
    <h2>Thêm thông tin</h2>
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" pattern="\w\s\{2,50}$" title="Tối thiểu 2 ký tự." placeholder="Nhập tên"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" pattern="^[a-z]\w[^A-Z]?=\@{50}$" title=" Sai ngữ pháp !"
                       placeholder="Nhập email"></td>
        </tr>
        <tr>
            <td>Điện thoại</td>
            <td><input type="text" name="phone" pattern="^[0+]\d{9,11}$" title="Số điện thoại dài từ 10 -12 số."
                       placeholder="Nhập số điện thoại"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="address" placeholder="Nhập địa chỉ"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit" name="add_user">Thêm</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
