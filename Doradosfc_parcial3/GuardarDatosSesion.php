<?php

    include 'conexion.php';

    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];

    $sql = "INSERT INTO usuarios (correo, contrasena)". 
    "VALUES ('".$correo."', '".$contrasena."')";

    if($conexion->query($sql) === TRUE)
    {
        echo "Registro guardado con Éxito <a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
    }

    $conexion->close();
?>