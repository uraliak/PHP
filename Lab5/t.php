<?php
$u = file('1.txt', FILE_IGNORE_NEW_LINES);
$a = $u[0];
$b = $u[1];
$f ='sin';
eval("\$z=$a * $f($x/180*pi());");
print $z;
?>