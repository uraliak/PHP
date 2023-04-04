<?php
echo "#2". '<br>';
$a = file_get_contents('2.txt');
file_put_contents('2.txt', $a.'12345');
var_dump($a);
print "<br>";

echo "#6". '<br>';
$a = file_get_contents('6.txt');
$b = pow($a, 2);
file_put_contents('6.txt', $b);
var_dump($b);
print "<br>";

echo "#7". '<br>';
$b = file_get_contents('7.txt');
file_put_contents('7.txt', $b.'!');
var_dump($b);
print "<br>";

echo "#8". '<br>';
$c = file_get_contents('8.txt');
copy('8.txt', 'copy8.txt');
var_dump($c);
print "<br>";

echo "#9". '<br>';
$d = file_get_contents('9.txt');
copy('9.txt', 'dir9/9.txt.txt');
var_dump($d);
print "<br>";

echo "#10". '<br>';
echo "размер файла в байтах: " .filesize('nature.jpg');
print "<br>";
echo "размер файла в МБайтах: " .filesize('nature.jpg') / (1024 * 1024);
print "<br>";

echo "#11". '<br>';
echo "размер файла в байтах: " .filesize('11.txt');
print "<br>";

echo "#12". '<br>';
$e = rename('12old.txt', '12new.txt');
echo $e;
var_dump($e);
print "<br>";

echo "#13". '<br>';
$f = file_get_contents('13.txt');
copy('13.txt', 'dir13/13.txt.txt');
var_dump($f);
print "<br>";

echo "#14". '<br>';
$g = file_get_contents('14.txt');
copy('dir/14.txt', 'dir14/14.txt');
var_dump($g);
print "<br>";

// echo "#15". '<br>';
// $u = array(
//     [0] => '15_1.txt',
//     [1] => '15_2.txt',
//     [2] => '15_3.txt',
// );
// foreach ($u as $key => $value) {
//     if (file_exists($value)){
//         print "$value = true";
//     }
//     else{
//         print "$value = false";
//     }
// };
// print "<br>";

echo "#16". '<br>';
var_dump(file_exists('16.txt'));
print "<br>";

echo "#17". '<br>';
if (file_exists('17.txt')){
    unlink('17.txt');
}
else{
    file_put_contents('17.txt', '17');
}
print "<br>";

echo "#18". '<br>';
$n = file('18.txt', FILE_IGNORE_NEW_LINES);
var_dump($n);
print "<br>";

echo "#19". '<br>';
$n = file('19.txt', FILE_IGNORE_NEW_LINES);
$sum_n = array_sum($n);
file_put_contents('19sum.txt', $sum_n);
print "<br>";

echo "#21". '<br>';
$XVI="Иван Васильевич";
$XVIII="Пётр Алексеевич";
$XIX="Николай Павлович";
print("В XVI веке правил $XVI. <br>");
print("В XVIII веке правил $XVIII. <br>");
print("В XIX веке правил $XIX. <br>");
print "<br>";

echo "#23". '<br>';
file_put_contents('23.txt', '');
print "<br>";

echo "#24". '<br>';
file_put_contents('24.txt', '12345');
print "<br>";

echo "#26". '<br>';
unlink('26.txt');
print "<br>";

echo "#27". '<br>';
$w = file('27.txt', FILE_IGNORE_NEW_LINES);
$sum_w = array_sum($w);
file_put_contents('27sum.txt', $sum_w);
print "<br>";
?>