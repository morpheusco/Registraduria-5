    <!-- Aquí el encabezado -->
    <header class="container-fluid">
        <div class="row">

            <div class="col-md-12">

                <!-- Barra de navegación -->
                <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">

                    <!-- Logo de la página -->
                    <img src="http://lorempixel.com/200/50" alt="Logo de la página">

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">

                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="fas fa-home"></span>
                                    Inicio
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="acercade.php">
                                    <span class="fas fa-address-card"></span>
                                    Acerca de
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="fas fa-cogs"></span>
                                    Servicios
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tareas.php">
                                    <span class="fas fa-briefcase"></span>
                                    Tareas
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" id="desplegable" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="fas fa-copy"></span>
                                    Páginas
                                </a>
                                <div class="dropdown-menu" aria-labelledby="desplegable">
                                    <a class="dropdown-item" href="#">Blog</a>
                                    <a class="dropdown-item" href="#">FAQ</a>
                                    <a class="dropdown-item" href="#">404 </a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="fas fa-blog"></span>
                                    Blog
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="fas fa-user"></span>
                                    Contacto |
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="fas fa-lock"></span>
                                </a>
                            </li>

                        </ul>

                    </div>
                </nav>

            </div>

        </div>
    </header>


    <?php include 'funciones.php' ; ?>