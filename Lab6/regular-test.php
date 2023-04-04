<?php
echo "№1 <br>";
echo "str = 'aaaw aaab' <br>";
echo preg_replace('#aaa(?!b)#', '!', 'aaaw aaab');
print "<br>";
echo "№2 <br>";
echo "str = 'aaa bcd xxx efg' <br>";
echo preg_match_all('#(\S)*\1#i', 'aaa bcd xxx efg', $k);
var_dump($k[0]);
print "<br>";
echo "№3 <br>";
echo "str = 'aa aba abba abbba abca abea' <br>";
echo preg_match_all('#ab+a#i', 'aa aba abba abbba abca abea', $u);
var_dump($u[0]);
print "<br>";
echo "№4 <br>";
echo "str = 'a1a a2a a3a a4a a5a aba aca' <br>";
echo preg_match_all('#a\da#', 'a1a a2a a3a a4a a5a aba aca', $s);
var_dump($s[0]);
print "<br>";
?>