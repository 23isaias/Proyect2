<!--Barra de navegación del paciente-->
<!--Responsive integrado con bootstrap-->
<!--A la espera del logo y del apartado de cerrar sesión-->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #002973;">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">SIGMED</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown" style="justify-content: flex-end">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="?controller=Cita&&action=index">Agendar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?controller=Cita&&action=mostrar">Mis Citas</a>
                  </li>
                  <li class="nav-item">
                <a class="nav-link" aria-current="page" href="?controller=Login&&action=cerrarSesion">Salir</a>
                </li>
            
              </ul>
            </div>
          </div>
        </nav>
