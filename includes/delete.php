<?php
require_once '../debug.php';
require_once 'db.php';

$id = $_GET['id'];
$delete = mysqli_query($db,"DELETE FROM `products` WHERE `products`.`id` = '$id'");
if (!$delete){
    echo "Помилка";
}else{
    header("Location: ../index.php");
}