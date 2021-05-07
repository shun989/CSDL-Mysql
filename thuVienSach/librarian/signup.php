<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    include_once "../database/Database.php";
    $database = new Database();
    $conn = $database->connect();

    $name = $_REQUEST['name'];
    $gender = $_REQUEST['gender'];
    $age = $_REQUEST['age'];
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'];
    $address = $_REQUEST['address'];

    $name = addslashes($name);
    $gender = addslashes($gender);
    $age = addslashes($age);
    $phone = addslashes($phone);
    $email = addslashes($email);
    $address = addslashes($address);

    $sql = "INSERT INTO librarians (name,gender,age,phone,email,address) 
            VALUES ('$name','$gender','$age','$phone','$email','$address')";
    $conn->query($sql);
    echo "Đăng ký thành công.";
    header('refresh:1,url=');


}
