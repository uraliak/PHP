<?php
require('db.php');
$mysqli = connect();
$id = $_GET['id'];
mysqli_query($mysqli, "DELETE FROM field WHERE `field`.`id` = '$id'");
header('Location: index.php');