<div class="container my-3">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">TuEmpresa</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="formulario.php">Usuarios <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="editaradmin.php">Administradores</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="paginacion.php">Paginacion</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Modulo a futuro</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Menu
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Mi usuario  <?php echo $_SESSION['nombreUsuario'] ?> </a>
            <a class="dropdown-item" href="salir.php">Salir</a>
            </div>
        </li>
        </ul>
    </div>
    </nav>
</div>
