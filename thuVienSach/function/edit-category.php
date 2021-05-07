<?php
include_once "../database/Database.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $database = new Database();
    $conn = $database->connect();

    $id = $_REQUEST['id'];
    $code = $_REQUEST['code'];
    $name = $_REQUEST['name'];

    $sql = "
        UPDATE categories SET
        code = '$code',
        name = '$name' 
        WHERE id = $id
    ";

    $conn->query($sql);
    echo "Thay đổi thành công đang quay lại trang chủ.";
    header('refresh:2,url=../index.php');
}