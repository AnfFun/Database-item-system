<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Додаваня товарів</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
            font-size: 2.5rem;
        }

        table {
            border-collapse: collapse;
            /*margin: 20px 0px 20px 00px;*/
            margin: auto;
            background-color: white;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden;

        }

        th, td {
            padding: 12px 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f9f9f9;
        }

        form {
            background-color: white;
            margin: 20px;
            padding: 20px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        form p {
            margin: 10px 0;
            font-weight: bold;
        }

        form input[type=text], form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        form button[type=submit] {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }

        form button[type=submit]:hover {
            background-color: #0062cc;
        }
    </style>
</head>
<body>

<h1>Список товарів</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Назва</th>
        <th>Ціна</th>
        <th>Повний опис</th>
        <th>Змінити дані</th>
        <th>Видалити дані</th>
    </tr>
    <?php
    require_once 'includes/db.php';
    require_once 'debug.php';

    $item = mysqli_query($db, "SELECT * FROM `products`");
    $item = mysqli_fetch_all($item);

    foreach ($item as $i){

        ?>
        <tr>
            <td><?=$i['0']?></td>
            <td><?=$i['1']?></td>
            <td><?=$i['4']?> UAH</td>
            <td><a href="includes/detailed.php?id=<?=$i['0']?>">Детальніше</a></td>
            <td><a href="includes/edit.php?id=<?=$i['0']?>">Змінити</a></td>
            <td><a href="includes/delete.php?id=<?=$i['0']?>">Видалити</a></td>
        </tr>
        <?php
    }
    ?>
</table>

<form action="includes/add_product.php" method="post">
    <p>Назва товару:</p>
    <input type="text" name="name">
    <p>Опис товару:</p>
    <input type="text" name="description">
    <p>Категорія товару:</p>
    <select name="category">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    <p>Ціна товару:</p>
    <input type="text" name="price">
    <br>
    <button type="submit">Додати</button>
</form>
</body>
</html>