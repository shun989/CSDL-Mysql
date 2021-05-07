<?php
include_once "../database/Database.php";

$database = new Database();
$conn = $database->connect();
$id = $_REQUEST['id'];
$sql = "DELETE FROM categories WHERE id = $id";
$conn->query($sql);
header('location:../index.php');