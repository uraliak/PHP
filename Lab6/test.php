<?php
    // $str = "Петров Иван Александрович";
    // preg_match('/([А-ЯЁ][а-яё])+\s([А-ЯЁ][а-яё])+\s([А-ЯЁ][а-яё])+/u', $str, $matches);
    // var_dump($mathes);
    // echo "$mathes[1] $mathes[2]. $mathes[3]."

    // echo str_replace('a', '!', 'aa bb abab'). '<br>';
    // echo str_replace('/a/', '!', 'aa bb abab'). '<br>';

    // echo str_replace('a', '!', 'aa bAb abab'). '<br>';
    // echo str_replace('/a/i', '!', 'aa bAb abab'). '<br>'; //не зависити от регистра буквы

    // echo str_replace('aA', '!', 'aA bAb abab'). '<br>';
    // echo str_replace('/[aA]/', '!', 'aA bAb abab'). '<br>'; // замена aA

    // \s
    // \S
    // .
    // .?
    // \d
    // \D
    // echo preg_replace('//', '!', 'xabx xababx xaabbx');
    // echo 'xabx xababx xaabbx <br>';
    // echo preg_replace('/x(ab)+x/', '!', 'xabx xababx xaabbx'. '<br>');
    // echo preg_replace('/x(ab)\+x/', '!', 'xabx xababx xaabbx'. '<br>');
    // echo 'a23t4x qw x e <br>';
    // echo preg_replace('/a.+x/', '!', 'a23t4x qw x e');
    // print "<br>";
    // echo preg_replace('/a.+?x/', '!', 'a23t4x qw x e');
    // print "<br>";
    // echo preg_replace('/xax/', '!', 'xx xax xaax xaaaax');
//     echo 'xx xax xaax xaaaax <br>';
//     echo preg_replace('/xa{2}x/', '!', 'xx xax xaax xaaaax');//
    echo 'axx bxx ^xx dxx <br>';
    echo preg_replace('/[^d]xx/', '!', 'axx bxx ^xx dxx');
    print "<br>";
    echo preg_replace('/[d^]xx/', '!', 'axx bxx ^xx dxx');
    print "<br>";
    echo preg_replace('/[^-@]xx/', '!', 'axx bxx ^xx dxx');
    print "<br>";
    echo preg_replace('/[:@-]xx/', '!', 'axx bxx ^xx dxx');
    print "<br>";
    echo preg_replace('/aaa$/', '!', 'aaa aaa aaa');
    print "<br>";
    echo preg_replace('/^aaa$/', '!', 'aaa'); //работа со строкой
    print "<br>";
    echo preg_replace('/^aaa/', '!', 'aaa aaa aaa');
    print "<br>";
    echo preg_replace('/\baaa\b/', '!', 'aaa aaa aaa'); //работа со словом
    print "<br>";
    echo preg_replace('/a|b+|c/', '!', 'bbbbbbbb bbbbbb'); //работа со словом
    print "<br>";
    echo '\\'; //вывод \
    print "<br>";
    echo '\\ \\ \\\\'; //вывод \\\\
    print "<br>";
    echo preg_replace('/\\\\/', '!', '\\\\\\\\'); //работа со словом
    print "<br>";
    echo preg_replace('/\\\\/', '!', '\\ \\ \\\\', 3); //работа со словом


?>