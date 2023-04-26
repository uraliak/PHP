<?php
    session_start();
    if (!isset($_SESSION['counter'])){
        $_SESSION['counter'] = 1;
    }else
        $_SESSION['counter'] += 1;
    echo 'Вы обновили эту страницу '.$_SESSION['counter'].' раз!'.'<br>'; 
    // $_SESSION['test'] = 'Test';
    unset($_SESSION['test']);
    echo $_SESSION['test'];

    session_destroy();
?>