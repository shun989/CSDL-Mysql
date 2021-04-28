<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include_once "../database/Database.php";
        $database = new Database();
        $conn = $database->connect();

        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $phone = $_REQUEST['phone'];
        $address = $_REQUEST['address'];

//        $name = addslashes($name);
//        $email = addslashes($email);
//        $phone = addslashes($phone);
//        $address = addslashes($address);

        $sql = "INSERT INTO users (name, email, phone, address) VALUES (
                                                        '$name',
                                                        '$email', 
                                                        '$phone', 
                                                        '$address')";
        $conn->query($sql);
        //$conn->exec($sql);
        echo "them thanh cong";
        header('refresh:2,url=../index.php');

    }
    $conn = null;



