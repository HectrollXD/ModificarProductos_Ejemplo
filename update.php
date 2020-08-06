<?php
    include_once ("conexion.php");

    $cod = $_POST['cod'];
    $nom = $_POST['nom'];
    $can = $_POST['can'];
    $pre = $_POST['pre'];
    $estado = false;

    $QueryString = "UPDATE Productos SET Nombre = '$nom', Cantidad = $can, Precio = $pre WHERE IDProducto = '$cod'";
    $Query = $Connection -> query($QueryString);
    if($Query){
        $estado = true;
    }
    else{
        $estado = false;
    }
    echo json_encode($estado);
?>