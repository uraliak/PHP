<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    print "#1";
    print "<br>";
    $_SESSION['u'] = 'test';
    if(isset($_SESSION['u'])){
        $k = $_SESSION['u'];
        echo $k;
    }
    print "<br>";
    print "#2";
    $_SESSION['k'] = 'Текст на следующей странице';
    print "<br>";
    print "#3";
    print "<br>";
    if (!isset($_SESSION['m'])){
        echo 'Вы не обновили страницу';
        print "<br>";
        $_SESSION['m'] = 0;
    }else
        $_SESSION['m'] ++;
    echo 'Вы обновили эту страницу '.$_SESSION['m'].' раз!'.'<br>'; 
    ?>
    <p><a href="test2.php">Переход</a></p>
</body>
</html>
<?php
