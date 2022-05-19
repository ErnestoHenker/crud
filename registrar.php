<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Formulario de Registro</title>
</head>
<body>
    <div class="container mt-3">
        <h2>Registro de usuario</h2>
        <form action="regconexion.php">
          <div class="mb-3 mt-3">
            <label for="">Usuario:</label>
            <input type="text" class="form-control"  placeholder="Ingrese Usuario" name="usuario">
          </div>
          <div class="mb-3 mt-3">
            <label for="">Contraseña:</label>
            <input type="password" class="form-control" placeholder="Ingrese Clave" name="clave">
          </div>
          <div class="mb-3 mt-3">
            <label for="">Correo:</label>
            <input type="email" class="form-control" placeholder="Ingrese su Correo" name="correo">
          </div>
          <div class="form-check mb-3">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="remember"> Recordar
            </label>
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button> <br> <br>
          <button type="reset" class="btn btn-primary">Cancelar</button> <br> <br>
      </div>
      </div>
      </form>
</body>
</html>