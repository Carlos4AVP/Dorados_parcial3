<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesión</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body>
    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Iniciar Sesión</h1><hr>
                <form method="post" action="GuardarDatosSesion.php">
                    <div class="form-group">
                        <input type="text" name="correo" placeholder="Correo electrónico">
                    </div>

                    <div class="form-group">
                        <label for="">Contraseña:</label>
                        <input type="text" name="contrasena" placeholder="Min. 8 caracteres">
                    </div>

                    <div>
                        <input type="submit" class="btn btn-primary" value="Iniciar Sesion">
                        <a href="consultarDatos.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="text-center">
        <hr>
        2022 &copy; Dorados De Sinaloa
    </footer>
    <script src="js/bootstrap.js"></script>
</body>
</html>