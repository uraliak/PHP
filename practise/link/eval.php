<?php
if (isset($_GET['name'], $_GET['x'])){
    if (!empty($_GET['name']) && $_GET['x']){
        foreach ($_GET as $key => $value){
            eval("\$$key = $value;");
        }
        echo "name = $name, x = $x <br>";
        }
    
}
// $vek = $_GET['vek']
// $XV = "Kate";
// $XVI = "Nick";
// $XIV = "Genry";
// print "In $vek vek was a .$$vek.". '<br>';
// ?>