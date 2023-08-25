<?php
session_start();
if($_SESSION['ok']=== null){
    header("Location: index.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Mi Sitio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="salir.php">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

  
    <div class="container mt-5">
        <h2 class="text-center">Vista de usuario rustico</h2>
        <p class="text-center">Está vista solo permite ver y editar datos</p>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>usuario</th>
                        <th>Rol de sistema</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    >
                        <td>Campos</td>
                        <td>Campos</td>
                        <td>Campos</td>
                        <td>Campos</td>
                        <td>Campos</td>
                        <td>Campos</td>
                        <td>
                            <button class="btn btn-warning btn-sm"><a  href="actualizarR.php">Editar</a></button>
                           </button>
                        </td>
                    </tr>
                    <tr>
                    <td>Campos</td>
                        <td>Campos</td>
                        <td>Campos</td>
                        <td>Campos</td>
                        <td>Campos</td>
                        <td>Campos</td>
                        <td>
                            <button class="btn btn-warning btn-sm"><a  href="actualizarR.php">Editar</a></button>
                        </td>
                    </tr>
                    <!-- Agrega más filas según sea necesario -->
                </tbody>
            </table>
        </div>
    </div>


</body>
</html>