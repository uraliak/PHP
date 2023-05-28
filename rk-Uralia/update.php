<?php
require('db.php');
$mysqli = connect();
$product_id = $_GET['id'];
// print_r($field_id);
$product = mysqli_query($mysqli, "SELECT * FROM `field` WHERE `id`= '$product_id'");
$product = mysqli_fetch_assoc($product);
// print_r($field);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update field</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="index.php">Главная</a>
    <h2>Изменить область знания</h2>
    <form action="update_again.php" class="form-add" method="post">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <div class="add">
            <label for="field">Название области знаний</label>
            <input type="text" name="field" id="field" value="<?= $product['field'] ?>">
            <label for="description">Описание</label>
            <textarea name="description" id="description"><?= $product['description'] ?></textarea>
            <button type="submit" class="submit">Изменить</button>
        </div>
    </form>
</body>
</html>
