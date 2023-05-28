<?php
require('db.php');
$mysqli = connect();
// $field = mysqli_query($mysqli, "SELECT * FROM `field`");
// var_dump($field);
// $field = mysqli_fetch_all($field);
// echo '<pre>';
// print_r($field);
// echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coursework</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>DESCRIPTION</th>
            <th>&#9672;</th>
            <th>&#9998;</th>
            <th>&#10006;</th>
        </tr>
        <?php
            $products = mysqli_query($mysqli, "SELECT * FROM `field`");
            $products = mysqli_fetch_all($products);
            foreach($products as $product) {
            ?>
            <tr>
                <td><?= $product[0] ?></td>
                <td><?= $product[1] ?></td>
                <td><?= $product[2] ?></td>
                <td><a href="product.php?id=<?= $product[0] ?>">Просмотр</a></td>
                <td><a href="update.php?id=<?= $product[0] ?>">Обновить</a></td>
                <td><a href="delete.php?id=<?= $product[0] ?>">Удалить</a></td>
            </tr>
            <?php
        }
        ?>
        <!-- <tr>
            <td>1</td>
            <td>Cake</td>
            <td>Delicious foods</td>
        </tr> -->
    </table>
    <h2>Добавить область знания</h2>
    <form action="create.php" class="form-add" method="post">
    <div class="add">
        <label for="field">Название области знаний</label>
        <input type="text" name="field" id="field">
        <label for="description">Описание</label>
        <textarea name="description" id="description"></textarea>
        <button type="submit" class="submit">Добавить</button>
    </div>
</form>
</body>
</html>