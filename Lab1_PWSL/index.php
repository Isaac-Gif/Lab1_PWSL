<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Inicio de sesión</title>
</head>
<body>

<form action="validacion.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Correo Electronico</label>
    <input type="text" class="form-control" name="correo" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su correo">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" name="pdw" id="exampleInputPassword1" placeholder="Ingrese su contraseña">
  </div>
  <button type="submit" class="btn btn-primary">Iniciar sesion</button>
</form>
</body>
</html>