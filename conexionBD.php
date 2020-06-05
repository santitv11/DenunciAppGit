<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "denunciasbd";

$conn= new mysqli($servername, $username, $pass, $dbname);
if($conn->connect_error){
    echo "Conexion fallida";
    die("la conexion fallo". $conn->connect_error);
}
else{
    //echo "</br>Conexion entre php y mysql fue exitosa";
}
?>