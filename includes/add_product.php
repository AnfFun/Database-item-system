<?php
require_once '../debug.php';
require_once 'db.php';
$name = $_POST['name'];
$description = $_POST['description'];
$category_id = $_POST['category'];
$price = $_POST['price'];

if (mysqli_query($db,
    'INSERT INTO `products`
           (`id`, `name`, `description`, `category_id`, `price`)
           VALUES
           (NULL, "'.$name.'", "'.$description.'", '.$category_id.', "'.$price.'")')) {
    echo "Ви успішно додали товар";
    header("Location: ../index.php");
} else {
    echo "Виникла помилка";
//    header("Location: ../index.php");
}