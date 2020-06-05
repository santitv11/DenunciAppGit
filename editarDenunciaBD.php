<?php
    $id= $_POST['input_id'];
    $lugar=$_POST["input_lugar"];
    $fecha=$_POST["input_fecha"];
    $hora=$_POST["input_hora"];
    $tipovehi=$_POST["input_tipovehi"];
    $placa=$_POST["input_placa"];
    $denuncia=$_POST["input_denuncia"];

    include_once("conexionBD.php");
    $sql = "UPDATE denuncias SET lugar='{$lugar}', fecha='{$fecha}', hora='{$hora}', tipoVehiculo='{$tipovehi}', placa='{$placa}', denuncia='{$denuncia}'
    WHERE id_pk='{$id}'";
    
    $respuesta = $conn->query($sql);
    if($respuesta===TRUE){
        echo "</br>Registro actualizado correctamente";
    } 
    else{
        echo "Error al actualizar: .$conn->error";
    }
    $conn->close();
    header("location: index.php");
?>