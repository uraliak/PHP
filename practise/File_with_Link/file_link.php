<?php
// $a = 5;
// $b = &$a;
// print "\$b = $b, \$a = $a" .'<br>';
// print "<br>";

// $a = 10;
// $z = 'a';
// print "\$z = $z, \$\$z =" .$z .'<br>'; //$z == a
// print "<br>";
// print "\$z = $z, \$\$z =" .$$z .'<br>'; //$z == 10
// print "<br>";

// // $k = 1;
// // $b = 2;
// // $c = 3;
// // list($k, $b, $c) = F1($k, $b, $c);
// // print "k = $k, b = $b, c = $c <br>";
// // print "<br>";

// // $d = 4;
// // $f = 5;
// // $g = 6;
// // list($d, $f, $g) = F1($d, $f, $g);
// // print "d = $d, f = $f, g = $g <br>";
// // print "<br>";

// // function F1($x, $y, $z){
// //     $x--; $y--; $z++;
// //     return array($x, $y, $z);
// // }

// $k = 1;
// $b = 2;
// $c = 3;
// F1($k, $b, $c);
// print "k = $k, b = $b, c = $c <br>";
// print "<br>";

// $d = 4;
// $f = 5;
// $g = 6;
// F1($d, $f, $g);
// print "d = $d, f = $f, g = $g <br>";
// print "<br>";

// function F1(&$x, &$y, &$z){
//     $x--; $y--; $z--;
//     return array($x, $y, $z);
// }

// $fun = 'sin';
// $y = 30;
// $x = $y/180*pi();
// $z = $fun($x);
// print $z;
// print "<br>";
// print "$fun($y<sup>o</sup>) = $z". '<br>';
// print "<br>";

// $f = 'sin';
// $x = 30;
// eval("\$z=$f($x/180*pi());");
// print $z;
// 
// $vek = $_GET['vek']
// $XV = "Kate";
// $XVI = "Nick";
// $XIV = "Genry";
// print "In $vek vek was a .$$vek.". '<br>';

// echo file_get_contents('test.txt');
// echo file_get_contents('.\test1.txt');
// $u = file_get_contents('.\test2.txt');
// $u = explode("\r\n", $u);
// var_dump($u);
// $u = file_get_contents('test.txt');
// file_put_contents('test.txt', $u.'hello!'); //при каждой перезагрузке будет появляться !
// print $u;
// $u = rename('test.txt', 'mother.txt');
// $u = rename('mother.txt', 'test.txt');
// print $u;
// $b = copy('test.txt', 'copytest.txt');
// print $b;
// $l = rename('copytest.txt', 'work.txt');
// print $l;
// unlink('work.txt');
// var_dump(file_exists('cat.txt'));
// unlink('uralia.txt');
// $u = file_get_contents('1.txt');
// file_put_contents('1.txt', $u.'hello');
// var_dump(file_exists('1.txt'));
// var_dump(filesize('1.txt'));
// $u = file_get_contents('1.txt'); //просмотр содержимого(выход, как массив)
// $arr = explode("\n", $u);
// var_dump($arr);
// print "<br>";
// file_put_contents('copy1.txt', implode("\n", $arr)); //создание копии 1 файла
// print "<br>";
// $brr = file('1.txt', FILE_IGNORE_NEW_LINES); //получение массива строк
// var_dump($brr);
$u = file_get_contents('1.txt'); //просмотр содержимого(выход, как массив)
$arr = explode("\n", $u);
file_put_contents('1.txt', implode(PHP_EOL, $arr)); //делает перенос строк в файле
?>