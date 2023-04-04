<?php
define("pi", 3,1415926);
$R = 5;
$L = 2 * pi * $R;
echo $L .'<br>';
$a = 3;
$a *= 4;
$a /= 3;
$a = $a .' kg';
if($a)print 'a=$a<br>';
echo $a .'<br>';
$x = 1.2;
echo "\$x == $x, type: " .gettype($x). "<br>\n";
$y = (int)$x;
echo $y .'<br>';
$u = 'cold';
echo "\$u == $u, type: " .gettype($u) .'<br>';
echo 'floor: ' .'<br>';
$k = 8.9;
$j = 5.4;
echo floor($k) .'<br>';
echo floor($j) .'<br>';
echo '<br>';
echo 'round: ' .'<br>';
$k = 8.9;
$j = 5.4;
echo round($k) .'<br>';
echo round($j) .'<br>';
echo '<br>';
echo 'ceil: ' .'<br>';
$k = 8.9;
$j = 5.4;
echo ceil($k) .'<br>';
echo ceil($j) .'<br>';
$year = 2015;
$month = 5;
$day = 10;
$p = sprintf("%02d-%02d-%04d", $day, $month, $year);
echo $p .'<br>';
$num = 5;
$location = 'tree';
$format = 'In the %2$s %1$d apples';
echo sprintf($format, $num, $location) .'<br>';
echo sprintf("%'.08d\n", 11) .'<br>';
echo 'возведение в степень: ' .'<br>';
echo pow(2, 3) .'<br>';
echo 'конкатенация: ' .'<br>';
$q = 'Mos';
$p = 'cow';
echo $q.$p .'<br>';
echo 'конкатенация - предложение: ' .'<br>';
$f = 'Fly';
$p = 'with';
$b = 'love';
$res = $f.' '.$p.' '.$b;
echo $res .'<br>';
echo 'интерполяция - предложение: ' .'<br>';
$f = 'Fly';
$p = 'with';
$b = 'love';
$res = "$f $p $b";
echo $res .'<br>';
echo '<br>';
$t = '2';
$r = 5.1;
if ($t == $r) print 'true' .'<br>';
if ($t === $r) print 'true' .'<br>';
else print'false' .'<br>';
echo gettype($r) .'<br>';
echo '<br>';
$t = '2';
$r = 5.1;
$op = $t + $r;
$pi = $t.$r;
echo $op, '   ', $pi;
echo '<br>';
$t = '2';
$r = '2day';
$c = $t + $r;
$x = $r > $t;
echo $c .'<br>';
echo $x .'<br>';
echo '<br>';
$t = 2;
$r = '2d';
$c = $t + $r;
$x = $r < $t;
echo $c .'<br>';
echo $x .'<br>';
echo '<br>';
$a = 5;
$b = 8;
echo $a or $b;
echo '<br>';
$a = 5;
$b = ++$a;
echo $a, ' ', $b;
echo '<br>';
$a = 5;
$b = $a++;
echo $a, ' ', $b;
echo '<br>';
$a = 5;
$b = --$a;
echo $a, ' ', $b;
echo '<br>';
$a = 5;
$b = $a--;
echo $a, ' ', $b;
echo "<br>\n";
$u = 89;
$u = ' eyes';
print $u .'<br>';
print '<br>';
$a = 10;
$b = 5;
$u = $a%=$b;
print $u .'<br>';
print '<br>';
// $u = 6;
// $d = 9;
// if ($u > 2) goto M1
// $a = $d / 3;
// goto M2;
// M1: $a =  2;
// M2: print 'a = $a'
// echo "<br>";
$k = 10;
$u = 100;
$m = ($k > $u)?$k:$u;
print $m . '<br>';
$a = 15;
$a > 18 ? print 'b' : print 'm';
print '<br>';
$u = 100;
if ($u == 100){
    print 'class';
}
elseif ($u >= 3){
    print 'yes';
}
else print 'no';
print '<br>';
$x = 6;
if ($x < 0){
    $y = -$x;
}
elseif($x < 2){
    $y = pow($x, 2);
}
elseif($x < 5){
    $y = $x + 2;
}
elseif($x >= 5){
    $y = 7;
}
print $y .'<br>';
print '<br>';
$x = 98;
$l = 10;
switch ($x + $l) {
    case 100:
        print 5;
        break;
    case 108:
        print 108;
        break;
    default: print 'no';
    }
print '<br>';
$a = 0;
$k = 0;
while ($a < 11) {
    $a += 2;
    $k ++;
}
print $a . '<br>';
print $k . '<br>';
print '<br>';
$r = 0; $m = 0;
do {
    $m++;
    $r += 5;
} while ($r <= 10);
echo $r, '   ', $m;
print '<br>';

$x=2;$y=1.5;
$z = $x/$y;
while (abs($z -$y) > 0.001){
    $y =($z + $y)/2;
    $z = $x/$y;
}
print $y .'<br>';
$x=2;$y=1.5;
do {
    $z = $x/$y;
    $y =($z + $y)/2;
} while (abs($z -$y) > 0.001);
print $y .'<br>';
print '<br>';
$k = 0;
for ($i=0; $i <= 5; $i++) {
    $k += $i;
}
print $k;
print '<br>';
print '<br>';
$K = 0;
$A = [2,7,12,2,7,12,2,7,12,2,7,12,2,7,12,2,7,12];
for($i=0; $i < 18; $i++){
    $A[$i]--;
    if(!$A[$i]) break;
    $K++;
}
print "K = $K<BR>";
print '<br>';
$u = 0;
$a = [1,2,3,4,5,6,7,8,9,10];
for ($i = 1; $i <= 10; $i++) {
    $a[$i]--;
    if(!$a[$i]) continue;
    $u++;
}
print $u;

