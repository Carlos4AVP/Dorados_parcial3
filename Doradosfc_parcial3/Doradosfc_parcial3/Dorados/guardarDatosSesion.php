<?php

    include 'conexion.php';

    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];

    $sql = "INSERT INTO inicio_sesion (correo, contrasena)". 
    "VALUES ('".$correo."', '".$contrasena."')";

    $conexion=mysqli_connect("localhost","root","","dorados_bd");

    $consulta="SELECT*FROM inicio_sesion where inicio_sesion='$correo' and contrasena='$contrasena'";
    $resultado=mysqli_query($conexion,$consulta);

    $filas=mysqli_num_rows($resultado);

if($filas){
       header("location:index.php");

}else{
       ?>
       <?php
       include("inicio_sesion.php");
       ?>
       <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
       <?php
}
mysqli_free_result($resultado);

$conexion=mysqli_connect("localhost","root","","dorados_bd");

    if($conexion->query($sql) === TRUE)
    {
        echo "Inicio de sesión exitoso <a href='index.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
    }

    $conexion->close();
?> 