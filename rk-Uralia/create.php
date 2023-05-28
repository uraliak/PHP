<?php
require('db.php');
// print_r($_POST);
$field = $_POST['field'];
$description = $_POST['description'];
$mysqli = connect();
mysqli_query($mysqli, "INSERT INTO `field` (`id`, `field`, `description`) VALUES (NULL, '$field ', '$description')");
header('Location: index.php');