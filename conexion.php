<?php
    $host = "localhost";
    $user = "HectrollXD";
    $pass = "HectrollXD!1234";
    $db = "Pruebas";
    $Connection = new mysqli($host, $user, $pass, $db);
    if($Connection){
        
    }
    else{
        echo("valió pito");
    }
?>