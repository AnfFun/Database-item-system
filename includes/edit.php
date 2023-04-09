<?php
require_once '../debug.php';
require_once 'db.php';

$id = $_GET['id'];
$query = mysqli_query($db, "SELECT * FROM `products` WHERE `id` = '$id'");
$query = mysqli_fetch_assoc($query);
//debug($q);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редагувати товар</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        form {
            margin: 2rem auto;
            width: 90%;
            max-width: 500px;
            background-color: #fff;
            padding: 2rem;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        input[type="text"],
        button[type="submit"] {
            display: block;
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            transition: box-shadow 0.2s ease-in-out;
        }

        input[type="text"]:focus {
            outline: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        button[type="submit"] {
            background-color: #c00;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out;
        }

        button[type="submit"]:hover {
            background-color: #a00;
        }

        p {
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        input[type="text"] + p {
            margin-top: 1rem;
        }
    </style>
</head>
<body>
<form action="editor.php" method="post">
    <input type="hidden" name="edit-id" value="<?= $id ?>">
    <p>Назва:</p>
    <input type="text" name="edit-name" value="<?= $query['name'] ?>">
    <p>Опис:</p>
    <input type="text" name="edit-description" value="<?= $query['description'] ?>">
    <p>Категорія:</p>
    <input type="text" name="edit-category_id" value="<?= $query['category_id'] ?>">
    <p>Ціна:</p>
    <input type="text" name="edit-price" value="<?= $query['price'] ?>">
    <br> <br>
    <button type="submit">Підтвердити зміни</button>
</form>
</body>
</html>