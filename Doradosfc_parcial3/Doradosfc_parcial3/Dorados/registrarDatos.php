<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea una cuenta</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body>
    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="font-italic"><br><h1><b>Crea una cuenta</b></h1><hr></div>

                <form method="post" action="guardarDatos.php">
                    <div class="form-group">
                        <input type="text"  name="nombre" placeholder="Tu nombre(s)" maxlength="40" size="40" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="apellido" placeholder="Apellido(s)" maxlength="40" size="40" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="correo" placeholder="Correo electrónico" maxlength="40" size="40" required>
                    </div>

                    <div class="form-group">
                        <label for="">Contraseña:</label>
                        <input type="text" name="contrasena" placeholder="Min. 8 caracteres">
                    </div>

                    <div>
                        <input type="submit" class="btn btn-primary" value="Crear cuenta">
                        <a href="consultarDatos.php" class="btn btn-danger">Cancelar</a>
                    </div>
                    <p>
                        <br>
                        <br>
                        <br>
                    </p>
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
