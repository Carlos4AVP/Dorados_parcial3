<?php

    include 'conexion.php';

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];

    $sql = "INSERT INTO usuarios (nombre, apellido, correo, contrasena)". 
    "VALUES ('".$nombre."',' ".$apellido."', '".$correo."', '".$contrasena."')";

    if($conexion->query($sql) === TRUE)
    {
        echo "Registro guardado con Éxito <a href='index.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
    }

    $conexion->close();
?>
