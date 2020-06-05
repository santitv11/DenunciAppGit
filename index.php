<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DenunciApp</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            height: 100%;
            margin: 0;
        }
        .header{
            height:auto;
            padding: 30px;
            background-image: url(https://c8.alamy.com/compes/km06y3/grupo-de-negro-con-remolques-de-camiones-de-carga-circulando-en-carretera-rural-sobre-la-naturaleza-horizontal-banner-horizontal-km06y3.jpg);
            background-size: cover;
            background-position:center;
        }
        .seccion {
            min-height:280px;
            height: auto;
            background: #e9ebee;
            padding: 20px;
            float;
            
        }
        .footer{
            height:auto;
            padding-left: 5px;
            font-size: 15px;
            color: #737373;
            padding-top: 20px;
            padding-bottom: 10px;
        }
       
        body .seccion input {
            width: 250px;
            height: 20px;
            padding: 4px 8px;
            border: 1px solid #bdc7d8;
            border-radius: 5px;
            font-size: 15px;
            outline: none;
        }
        body .seccion .fecha{
            float: left;
        }
        body .seccion .fecha input{
            width: auto;
        }
        body .seccion .hora{
            margin-left:3px;
            float: right;
        }
        body .seccion .hora input{
            width: auto;
        }
        body .seccion .denuncia{
            margin-top:10px;
        }
        form{
            font-size: 15px;
            font-weight: bold;
            float: left;
        }
        body .seccion .boton input{
            background-color: #007bff;
            box-shadow: inset 0 1px 1px #88a3e3;
            border-color: #2011f2 #2011f2 #2c5115;
            font-weight: bold;
            margin-top: 10px;
            color: white;
            width: auto;
            height: 40px;
            cursor: pointer;
        }
        h1 {
            margin-top:0;
        }
        p {
            margin-bottom:0;
        }
        h3 {
            margin-top:0;
        }
        .tabla{
            background:white;
            display: flex;
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15);
            border-radius: .3rem;
            position: relative;
            margin-left:350px;
            padding:10px;
        }
        .tabla table{
            margin:0;
            font-size:14px;
        }
        a {
            text-decoration: none;
            cursor: pointer;
        }
        a:hover {
            text-decoration: underline;
        }
        .texto{
            background-color: rgba(255,255,255,0.60);
            width: 580px;
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15);
            border-radius: .3rem;
            padding:10px 10px;
        }       
    </style>
</head>

<body>
    <div class="header">
        <div class="texto">
            <h1>Bienvenido a DenunciApp</h1>
            <p>Aplicacion web para el registro de denuncias del transporte publico en Colombia.</br>
            Permite el control y la veduria publica</p>
        </div>
    </div>
    
    <div class="seccion">
        <h3>Formulario de Denuncia</h3>
        <form action=crearDenuncia.php method="POST">
            <div class="fecha">
                <label for="">Fecha</label></br>
                <input type="date" name="input_fecha" id="" required>
            </div>
            <div class="hora">
                <label for="">Hora</label></br>
                <input type="time" name="input_hora" id="" required>
            </div>
            <div class="lugar">
                <label for="" class="lugar"></label>
                <input type="text" name="input_lugar" id="" placeholder="Lugar" required>
            </div>
            <div class="tipov">
                <label for=""></label>
                <input type="text" name="input_tipovehi" id="" placeholder="Tipo de Vehiculo" required>
            </div>
            <div class="placa">
                <label for=""></label>
                <input type="text" name="input_placa" id="" placeholder="Placa" required>
            </div>
            <div class="denuncia">
                <label for="">Denuncia</label></br>
                <input type="textarea" name="input_denuncia" id="" required>
            </div>
            <div class="boton">
                <input type="submit" name="input_button" value="Registrar Denuncia">
            </div>
        </form>
        
        <div class="tabla">
            <table border="1" >
                <tr>
                    <th>ID</th>
                    <th>Lugar</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Tipo Vehiculo</th>
                    <th>Placa</th>
                    <th>Denuncia</th>
                    <th></th>
                    <th></th>
                </tr>
                
                <?php
                    include_once("conexionBD.php");
                
                    $sql = "SELECT * FROM denuncias";
                
                    $respuesta = $conn->query($sql);

                    while($row=$respuesta->fetch_array())
                    {
                ?>
                    <tr>
                        <td><?php echo $row['id_pk']; ?></td>
                        <td><?php echo $row['lugar']; ?></td>
                        <td><?php echo $row['fecha']; ?></td>
                        <td><?php echo $row['hora']; ?></td>
                        <td><?php echo $row['tipoVehiculo']; ?></td>
                        <td><?php echo $row['placa']; ?></td>
                        <td><?php echo $row['denuncia']; ?></td>
                        <td><a href="editarDenuncia.php?id_editar=<?php echo $row['id_pk']; ?>">editar</a></td>
                        <td><a href="eliminarDenuncia.php?id_eliminar=<?php echo $row['id_pk']; ?>">eliminar</a></td>
                    </tr>
                    <?php
                    }
                    mysqli_close ($conn);
                    ?>
            </table>
        </div>
    </div>
    
    <div class="footer">
        Trabajo realizado para la clase de Programacion Web II</br>
        STV © 2020
    </div>
</body>

</html>