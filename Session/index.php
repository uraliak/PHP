<?php
    session_start();
    require('form.html');
    if (isset($_POST['calculate']) && !empty($_POST['calc'])){
        eval('$res= '.$_POST['calc'].';');
        // echo $_POST['calc'].'='.$res;
        $_SESSION['history'][] = $_POST['calc'].'='.$res;
    }
    if (isset($_SESSION['history'])){
        for($i=0; $i<count($_SESSION['history']); $i++){
            echo $_SESSION['history'][$i].'<br>';
        }
    }
    if(isset($_POST['destroy'])) session_destroy();
    
    //     echo $_SESSION['history'][$i].'<br>';
    // }