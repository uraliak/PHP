<?php
echo "#1 <br>";
$str = "http://site.ru";
if (preg_match('/https?:\/\/[a-z]+\.[a-z]{2,3}+/i', $str)){
    echo "ok";
}
else echo "no";
print "<br>";

echo "#2 <br>";
$u = "https://nvnnvn.ru";
if (preg_match('/http.+/', $u)) echo "ok";
else echo "no";
print "<br>";

echo "#3 <br>";
$u = "hello.site.ru";
if (preg_match('/([a-z-]+\.){2}[a-z]{2,3}$/', $u)) echo 'ok';
else echo 'no';
print "<br>";
preg_match('/^\d{0,12}$/');

?>