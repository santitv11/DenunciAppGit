<?php
    include_once("conexionBD.php");
    $sql = "DELETE FROM denuncias WHERE id_pk={$_GET['id_eliminar']}";

    $respuesta = $conn->query($sql);
    if($respuesta===TRUE){
        echo "</br>Registro eliminado correctamente";
    } 
    else{
        echo "Error: .$conn->error";
    }
    mysqli_close ($conn);
    header("location: index.php");
?>
            