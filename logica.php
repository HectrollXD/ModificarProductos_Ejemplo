<?php
    include_once ("conexion.php");

    if(empty($_POST)){
        $tabla = "";
        $QueryString = "SELECT * FROM Productos";
        $Query = $Connection -> query($QueryString);
        $tabla .="
            <table border='2'>
                <thead>
                    <tr>
                        <th>Nombre de producto</th>
                        <th>Cantidad existente</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
        ";
        while( $row = $Query -> fetch_array(MYSQLI_NUM) ){
            $tabla .="
                <tr>
                    <td>$row[1]</td>
                    <td>$row[2]</td>
                    <td>$row[3]</td>
                    <td><input type='button' value='Modificar' class='modificar' codigo='$row[0]' nombre='$row[1]' cantidad='$row[2]' precio='$row[3]'></td>
                </tr>
            ";
        }
        $tabla .= "
                </tbody>
            </table>
        ";
        echo $tabla;
    }
    /* else{
        $cod = $_POST['cod'];
        $nom = $_POST['nom'];
        $can = $_POST['can'];
        $pre = $_POST['pre'];
        $estado = aray();
        $QueryString = "UPDATE Productos SET Nombre = '$nom', Cantidad = $can, Precio = $pre WHERE IDProducto = '$cod'";
        $Query = $Connection -> query($QueryString);
        if($Query){
            $estado['exito'] = true;
        }
        else{
            $estado['exito'] = false;
        }
        echo json_encode($estado)
    } */
?>
