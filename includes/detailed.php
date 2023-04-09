<?php
require_once '../debug.php';
require_once 'db.php';

$id = $_GET['id'];
$q = mysqli_query($db,"SELECT * FROM `products` WHERE `id` = '$id'");
$q = mysqli_fetch_assoc($q);
//debug($q);
?>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 2rem;
        background-color: #fff;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
    }

    h3 {
        font-size: 1.5rem;
        margin-top: 0;
    }

    p {
        font-size: 1.2rem;
        margin-top: 0;
    }

    .price {
        font-size: 1.5rem;
        font-weight: bold;
        color: #c00;
    }
</style>
<div class="container">
    <h3>Назва:</h3>
    <p><?= $q['name'] ?></p>
    <h3>Опис:</h3>
    <p><?= $q['description'] ?></p>
    <h3>Категорія:</h3>
    <p><?= $q['category_id'] ?></p>
    <h3>Ціна:</h3>
    <p class="price"><?= $q['price'] ?> UAH</p>
</div>
