<?php
$a = 2; $b = 5;
print "$a<sup>$b</sup> = $c <BR>";
print "<br>";
require('1.php'); // если не находит нужный файл, останавливает работу
print "$a<sup>$b</sup> = $c <BR>";
include('3.php'); //если не находит нужный файл, продолжает работу
print "$a<sup>$b</sup> = $c <BR>";
?>