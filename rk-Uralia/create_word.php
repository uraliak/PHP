<?php
require('db.php');
$mysqli = connect();
$id_product = $_POST['id'];
$word = $_POST['word'];
mysqli_query($mysqli, "INSERT INTO `hashtag` (`id`, `product_id`, `word`) VALUES (NULL, '$id_product', '$word')");
header('Location: product.php?id=' . $id_product);