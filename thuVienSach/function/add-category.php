<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    include_once "../database/Database.php";
    $database = new Database();
    $conn = $database->connect();

    $code = $_REQUEST['code'];
    $name = $_REQUEST['name'];

    $code = addslashes($code);
    $name = addslashes($name);

    $sql = "INSERT INTO categories (code,name) VALUES ('$code','$name')";
    $conn->query($sql);
    echo "Thêm thành công đang quay lại trang chủ.";
    header('refresh:2,url=../index.php');
}
$conn = null;

