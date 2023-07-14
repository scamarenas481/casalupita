<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../resources/css/login.css">
    <title>Iniciar Sesión</title>
    <style>

    </style>
</head>

<body>
    <div class="center-content">
        <img class="logo" src="images/logoCL.png" alt="Logo">

        <h1 class="h3 mb-3 fw-normal">Iniciar sesión</h1>

        <form action="/app/controlador/login.php" method="POST" onsubmit="return validateForm()">
            <div class="form-floating">
                <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario" required>
                <br>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
                <br>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar sesión</button>
        </form>
    </div>

    <!-- JavaScript de Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script>
        function validateForm() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            if (username === '' || password === '') {
                alert('Por favor, completa todos los campos.');
                return false;
            }

            // Si todo está bien, se enviará el formulario
            return true;
        }
    </script>
</body>

</html>
