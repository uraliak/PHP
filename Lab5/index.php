<?php
$a = ['a', 'b', 'c', 'b', 'a'];
var_dump(array_count_values($a));
echo '<br>';
$b = ['a'=>1, 'b'=>2, 'c'=>3];
var_dump(array_flip($b));
echo '<br>';
$c = [1, 2, 3, 4, 5];
var_dump(array_reverse($c));
echo '<br>';
$k = ['a', 'b', 'c'];
$u = [1, 2, 3];
$result = array_combine($k, $u);
var_dump($result);
?>

