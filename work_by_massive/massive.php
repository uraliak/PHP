<?php
$u = [1, '2', 56, 'hello', 98];
$u[6] = 90;
$u[7] = 'world';
$u[11] = 'pop';
for ($i=0; $i <= 10; $i++){
    print "\$u[$i] = $u[$i] <br>";
}
print "\$u[11] = $u[11] <br>";
print "<br>";
$u['name'] = 'Uralia';
$u['surname'] = 'Kinyabulatova';
$u['hobby'] = 'sing';
foreach ($u as $key => $value) {
    print "$key : $value <br>";
}
print "<br";
foreach ($u as $value) {
    print "$value <br>";
}
print "<br>";
$n = array(
    'book' => 'interesting',
    'emotion' => 'fantastic',
    'weather' => 'nice'
);
foreach ($n as $key => $value) {
    print "$key - $value <br>";
}
print "<br>";
$a = [1, 2];
$b = [3, 4];
$d = array(
    2 => 8,
    3 => 'none',
    8 => 3
);
$c = $a + $d;
$k = $c;
// foreach ($c as $value) {
//     print "$value <br>";
for ($i=0; $i < 9; $i++) {
    print "\$c[$i] = $c[$i] <br>";
}
for ($i=0; $i < 5; $i++) {
    print "\$k[$i] = $k[$i] <br>";
}
// $b = $a; //Копирование массива. $b и $a одинаковые массивы

//    $g = $a == $b; //$g = 1, т.е. "истина"

//    $g = $a === $b; //$g = 1, т.е. "истина"

//    $c = array(0 => 2, 1 => 1);

//    $g = $a ==  $c; //$g = 1, т.е. "истина"

//    $g = $a ===  $c; //$g = 0, т.е. "ложь", не идентично
$s = [1,2,3,4,5,' ',9,0,'bob'];
$u = count($s);
print "$u <br>";
echo "<br>";
$m = 'mbmgcugdt;jhhu';
$n = strlen($m);
print "$n <br>";
$l = array(
    0 => 'i',
    1 => 'you',
    2 => 'we'
);
ksort($l);
foreach ($l as $key => $value) {
    print "$key - $value <br>";
}
echo "<br>";
// array_shift($u);
// array_pop($u);
// array_unshift($u);
// array_push($u);
// array_pad($u);
$p = array(
    'a' => 'home',
    'b' => 'country',
    'c' => 'lovely'
);
$v = array_push($p, array(
    'd' => 'cat',
    'e' => 'dog'
));
print_r($p);
print "<br>";
print "\$v = $v <br>";
$r = ['a', 'b', 'c', 'd', 'y', 'u'];
$l = array_pad($r, 6, 5);
foreach ($l as $key => $value) {
    print "$key - $value <br>";
}
print "<br>";
$v = [
    ['a', 'b', 'c'],
	['d', 'e', 'f'],
	['g', 'h', 'i'],
	['j', 'k', 'l'],
];
print $v[3][2] .'<br>';
print $v[1][1] .'<br>';
print $v[2][0] .'<br>';
print $v[0][0] .'<br>';
print "<br>";
$arr = [[1, 2], [3, 4], [5, 6]];
$k = 0;
foreach ($arr as $value) {
    foreach ($value as $elem) {
        $k += $elem;
    }
}
print $k;
print "<br>";
$arr = [
    [
        ['a', 'b'],
        ['c', 'd'],
    ],
    [
        ['e', 'f'],
        ['g', 'h'],
    ],
    [
        ['i', 'j'],
        ['k', 'l'],
    ],
];
print $arr[1][1][1];
print "<br>";
print $arr[2][0][1];
print "<br>";
$arr = [
    [
        [1, 2],
        [3, 4],
    ],
    [
        [5, 6],
        [7, 8],
    ],
];
$k = 0;
foreach ($arr as $value) {
    foreach ($value as $cat) {
        foreach ($cat as $dog) {
            $k += $dog;
        }
    }
}
print "$k <br>";
$u = [
    [
        [1,2],
        [3,4],
    ],
    [
        [1,3],
        [7,8],
    ],
];

$p = [
    [1,1,1],
    [1,1,1],
    [1,1,1],
];
$k = 0;
foreach ($p as $value) {
    foreach ($value as $cat) {
        $k += $cat;
    }
}
print $k. '<br>';
$arr = [
    'boys'  => [1 => 'Коля', 2 => 'Вася', 3 => 'Петя'],
    'girls' => [1 => 'Даша', 2 => 'Маша', 3 => 'Лена'],
];
print $arr['boys'][1]. '<br>';
print $arr['girls'][1]. '<br>';
$u = [
    'name' => [
        'hello' => 5,
        'hi' => 10,
    ],
    'name2' => [
        'goodbay' => 10,
        'bye' => 5,
    ],
];
print_r($u);
print "<br>";
$arr = [
    'ru' => ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'],
    'en' => ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'],
];
print $arr['en'][2]. '<br>';
$arr = [
    [
        'name'   => 'user1',
        'age'    => 30,
        'salary' => 1000,
    ],
    [
        'name'   => 'user2',
        'age'    => 31,
        'salary' => 2000,
    ],
    [
        'name'   => 'user3',
        'age'    => 32,
        'salary' => 3000,
    ],
];
print $arr[0]['salary']. '<br>';
print $arr[1]['salary']. '<br>';
$k = 0;
$u = 0;
$arr = [
    [
        1, 2, 3, [4, 5, [6, 7]],
    ], 
    [
        8, [9, 10],
    ],
];
$k = $arr[0][0] + $arr[0][1] + $arr[0][2] + $arr[0][3][0] + $arr[0][3][1] + $arr[0][3][2][0] + $arr[0][3][2][1];
$u = $arr[1][0] + $arr[1][1][0] + $arr[1][1][1];
print $k+$u;
print "<br>";
$a = [1,2,3,4,5,6,' ', 9,7];
print count($a). '<br>';
print "<br>";
$a =  [64, 25, 81];
$u = array_map('sqrt', $a);
var_dump($u);
print "<br>";
$k = in_array('c', $a);
var_dump($k);
print "<br>";
$m = array_sum($a);
var_dump($m);
print $m;
print "<br>";
$arr = [
    [
        [1, 2, 3],
        [6, 7, 8],
        [3, 8, 4],
        [6, 7, 9],
    ],
    [
        [9, 1, 2],
        [4, 5, 6],
    ],
    [
        [9, 1, 2],
        [4, 5, 6],
        [5, 6, 3],
    ],
];
$k = 0;
foreach ($arr as $value) {
    foreach ($value as $cat) {
        foreach ($cat as $dog) {
            $k += $dog;
        }
    }
}
print $k;
print "<br>";
$c = [2,2,2,2,2];
$k = array_product($c);
print $k. '<br>';
$f = pow(2, 5);
print $f. '<br>';
var_dump(range('a', 'z'));
print "<br>";
$t = [1,2,3];
$z = ['a','v','o'];
$x = $t + $z;
$b = array_merge($z, $t);
rsort($b);
foreach ($b as $value) {
    print "$value <br>";
}
var_dump($b). '<br>';
print "<br>";
$x = [1,4,6,8,3];
$j = array_slice($x, 1, 3);
var_dump($j);
print "<br>";
$t = [
    'i' => 5,
    'd' => 7,
    's' => 9,
];
$p = array_slice($t, 0, 2);
var_dump($p). '<br>';
print "<br>";
$t = [
    7 => 5,
    1 => 7,
    3 => 9,
];
$p = array_slice($t, -2, 2, true);
var_dump($p). '<br>';
print "<br>";
$arr = ['a', 'b', 'c', 'd', 'e'];
$result = array_splice($arr, 1, 0, [1, 2, 3,'foofof',7,8,8]);
var_dump($result). '<br>';
print "<br>";
var_dump($arr). '<br>';
$arr = ['a', 'b', 'c', 'd', 'e'];
$m = array_splice($arr, 1, 3);
var_dump($m). '<br>';
print "<br>";
var_dump($arr). '<br>';
print "<br>";
$i = [
    'k' => 'miz',
    'g' => 'nvbb',
    'v' => 90,
    23 => 'bvbbv',
];
$p = array_keys($i);
var_dump($p);
print "<br>";
$n = array_values($i);
var_dump($n);
print "<br>";
$k = ['a', 'b', 'c', 'd', 'e', 'f'];
$v = [25,45,67,2,3,9];
$arr = array_combine($k, $v);
var_dump($arr);
print "<br>";
$j = array_flip($arr);
var_dump($j);
print "<br>";
$f = ['a','b','c','g','p','y'];
$d = array_reverse($f);
var_dump($d);
print "<br>";
$x = array_search('a', $f);
var_dump($x);
print "<br>";
$m = array_replace($f, [1 => '!!!', 4 => '-']);
var_dump($m);
print "<br>";
$h = array_rand($f);
var_dump($h);
print "<br>";
print $f[$h];
print "<br>";
$a = ['a','b','c','a','b','b','b','c','c','c','a','a','a'];
$k = array_count_values($a);
var_dump($k);
print "<br>";





