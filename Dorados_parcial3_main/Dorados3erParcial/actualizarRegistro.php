<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica de web con bases de datos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body>
    <?php
        include 'conexion.php';
        $id = $_GET["id"];
        $sql = "SELECT * FROM articulos_tienda WHERE id=" . $id;
        $resultado = $conexion->query($sql);
        $registro = $resultado->fetch_assoc();
    ?>
    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Registrar artículo</h1><hr>
                <form method="post" action="guardarRegistro.php">
                    <input name="id" type="hidden" value="<?php echo $registro["id"]; ?>">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input value="<?php echo $registro["nombre"]; ?>" type="text" class="form-control" name="nombre" placeholder="Teclea el nombre del producto">
                    </div>

                    <div class="form-group">
                        <label for="">Categoría:</label>
                        <input value="<?php echo $registro["categoria"]; ?>" type="text" maxlength="30" class="form-control" name="precio" placeholder="Introduce una categoría">
                    </div>

                    <div class="form-group">
                        <label for="">Precio:</label>
                        <input value="<?php echo $registro["precio"]; ?>" type="text" class="form-control" name="marca" placeholder="Introduce su precio">
                    </div>

                    <div class="form-group">
                        <label for="">Descuento</label><br>
                    <?php
                        if($registro["descuento"])
                        {
                            echo "<input type='radio' name='descuento' value='1' checked> Sí <br>";
                            if($registro["descuento"]===1)
                            {
                                echo "<input value='<?php echo $descuento];?>' type='text' placeholder='Establece un descuento'";
                            }
                            echo "<input type='radio' name='descuento' value='0'> No <br>";
                        } 
                        else 
                        {
                            echo "<input type='radio' name='descuento' value='1'> Sí <br>";
                            echo "<input type='radio' name='descuento' value='0' checked> No <br>";
                        }
                    ?>
                    </div>

                
                        <div class="form-group">
                        <label for="">Código</label>
                        <input value="<?php echo $registro["codigo"]; ?>" type="number" class="form-control" name="codigo">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-warning" value="Registrar">
                        <a href="consultarDatos.php" class="btn btn-dark">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="text-center bg-dark text-white">
        <hr>
        <img src="img/footer1.png" alt="Dorados Sinaloa" width="248px" height="219px">
        <img src="img/footer2.png" alt="Hazla de pez" width="330px" height="157px"><br>
        2022 &copy; Cetis107 Desarrollo Web<br><br>
    </footer>
    <script src="js/bootstrap.js"></script>
</body>
</html>
