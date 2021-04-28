<?php
include_once "../database/Database.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $database = new Database();
    $conn = $database->connect();
    $id = $_REQUEST['id'];

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $address = $_REQUEST['address'];

    $sql = "
            UPDATE users SET
            name = '$name',
            email = '$email',
            phone = '$phone',
            address = '$address'
            WHERE id = $id
    ";

    $conn->query($sql);
    echo " Sửa thành công";
    header('refresh:2,url= ../index.php');
}
