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
            <a class="navbar-brand" href="dash.php">Atras</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Formulario</h2>
                <form>
                    <div class="mb-3">
                        <label for="campo1" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="campo1" placeholder="Modificar nombre">
                    </div>
                    <div class="mb-3">
                        <label for="campo2" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="campo2" placeholder="Modificar Apellido">
                    </div>
                    <div class="mb-3">
                        <label for="campo3" class="form-label">Correo Electronico</label>
                        <input type="text" class="form-control" id="campo3" placeholder="Modificar el correo">
                    </div>
                    <div class="mb-3">
                        <label for="campo3" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="campo3" placeholder="Modificar usuario">
                    </div>
                    <div class="mb-3">
                    <select class="form-select" aria-label="Default select example">
  <option selected>Seleccione Rol</option>
  <option value="1">Rustico</option>
  <option value="2">Básico</option>
</select>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="mostrarMensaje()">Actualizar</button>
           
                </form>
                <div class="mt-3 alert alert-success d-none">
                    ¡Formulario enviado con éxito!
                </div>
            </div>
        </div>
    </div>
</body>
</html>
 <!-- Incluye Bootstrap JS (jQuery y Popper.js son necesarios) -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/js/bootstrap.min.js"></script>
 <script>
    function mostrarMensaje() {
        // Muestra el mensaje de éxito después de hacer clic en el botón "Enviar"
        document.querySelector('.alert-success').classList.remove('d-none');
    }
</script>