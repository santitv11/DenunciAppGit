<?php
    $lugar=$_POST["input_lugar"];
    $fecha=$_POST["input_fecha"];
    $hora=$_POST["input_hora"];
    $tipovehi=$_POST["input_tipovehi"];
    $placa=$_POST["input_placa"];
    $denuncia=$_POST["input_denuncia"];

    include_once("conexionBD.php");
    $sql = "INSERT INTO denuncias (lugar, fecha, hora, tipoVehiculo, placa, denuncia) 
    VALUES ('{$lugar}', '{$fecha}', '{$hora}', '{$tipovehi}', '{$placa}', '{$denuncia}')";
    
    $respuesta = $conn->query($sql);
    if($respuesta===TRUE){
        echo "</br>Registro creado correctamente";
    } 
    else{
        echo "Error: .$conn->error";
    }
    mysqli_close ($conn);
    header("location: index.php");
?>