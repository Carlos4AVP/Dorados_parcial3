<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php"><img src="img/logo_nav.png" alt="mz" width=80px height=80px></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="font-weight-bolder text-warning"><h1>Afición Dorados</h1></div>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php"><h4>Inicio</h4> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registrarDatos.php">Registar</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" method="GET" action="resultadoBusqueda.php">
            <input name="termino" class="form-control mr-sm-2" type="search" placeholder="Buscar" style="width: 500px; height:40px;" aria-label="Buscar">
          </form>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                  <img src="img/user.png" alt="Cuenta" height=50px width=50px>
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="InciarSecion.php">Iniciar Sesión</a>
                <a class="dropdown-item" href="registrarDatos.php">Regístrate</a>
        </div>
    </nav>