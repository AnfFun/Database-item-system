<?php
require_once '../debug.php';
require_once 'db.php';

$id = $_POST['edit-id'];
$name = $_POST['edit-name'];
$description = $_POST['edit-description'];
$category_id = $_POST['edit-category_id'];
$price = $_POST['edit-price'];
$update = mysqli_query($db, "UPDATE `products` SET `name` = '$name', `description` = '$description', `category_id` = '$category_id', `price` = '$price' WHERE `products`.`id` = '$id'");
if ($update) {
    header("Location: ../index.php");
} else {
    die("Помилка");
}
