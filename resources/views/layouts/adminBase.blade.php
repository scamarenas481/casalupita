<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../../resources/css/global.css">
    <link @yield('css')

    <title>@yield('title') </title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark" style="background-color: #00008B;" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../images/logo_construrama.png" alt="Logo" width="30" height="24"
                    class="d-inline-block align-text-center">
                Casa Lupita
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inventario Inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Revisión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Faltantes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Baja Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Reestructura</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Conteo Físico</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" href="#">Usuarios</a>
                        <ul class="dropdown-menu style" style="background-color: #00008B; color: white;">
                            <li><a class="dropdown-item" href="../usuarios/create">Registrar</a></li>
                            <li><a class="dropdown-item" href="../usuarios/modify">Editar</a></li>
                            <li><a class="dropdown-item" href="../usuarios/delete">Eliminar</a></li>
                            <li><a class="dropdown-item" href="../usuarios/show">Mostrar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Sidebar
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Configuración</a>
                    </li>
                </ul>
            </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

        </main>
    </div>
-->

    <div class="container">
        @yield('content')
    </div>

    <!-- JavaScript de Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

</body>

</html>
