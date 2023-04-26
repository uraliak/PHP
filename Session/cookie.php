<?php
    // setcookie('test', 'TEST', time()+1);
    // setcookie('test', 'TEST', time());
    setcookie('test', 'TEST', time()+3600*24*365);
    echo $_COOKIE['test'] = 'test';