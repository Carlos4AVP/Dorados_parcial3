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
    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Crea una cuenta</h1><hr>
                <form method="post" action="guardarDatos.php">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                    </div>

                    <div class="form-group">
                        <label for="">Apellido:</label>
                        <input type="text" class="form-control" name="apellido" placeholder="Apellido">
                    </div>

                    <div class="form-group">
                        <label for="">Correo electrónico:</label>
                        <input type="text" class="form-control" name="correo" placeholder="Correo electrónico">
                    </div>

                    <div class="form-group">
                        <label for="">Contraseña:</label>
                        <input type="text" name="contrasena" class="form-control" placeholder="Min. 8 caracteres">
                    </div>

                    <div>
                        <input type="submit" class="btn btn-primary" value="Crear cuenta">
                        <a href="consultarDatos.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="text-center">
        <hr>
        2022 &copy; Cetis107 Desarrollo Web
    </footer>
    <script src="js/bootstrap.js"></script>
</body>
</html>
