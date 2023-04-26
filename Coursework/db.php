<?php
    function connect(){
        $mysqli = mysqli_connect('localhost', 'root', '', 'coursework');
        if (mysqli_connect_errno()){
            echo "Ошибка подключения к базе данных".mysqli_connect_error();
        }else return $mysqli;
    }
?>