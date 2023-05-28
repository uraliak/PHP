<?php
require('db.php');
$mysqli = connect();
$id = $_POST['id'];
$field = $_POST['field'];
$description = $_POST['description'];
mysqli_query($mysqli, "UPDATE `field` SET `field` = '$field', `description` = '$description' WHERE `field`.`id` = '$id'");
header('Location: index.php');
?>

