<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>insertar</title>
</head>

<body>
<div class="container mt-3">
<h2>Registro de genero</h2>
  <form action="pagina2.php" method="post">
  <div class="mb-3 mt-3">
    Ingrese cedula:
    <input class="form-control" type="number" name="cedula"><br>
  </div>
  <div class="mb-3 mt-3">
    Ingrese nombre:
    <input class="form-control" type="text" name="nombre"><br>
    </div>
     <div class="mb-3 mt-3">
    Seleccione el genero:
    <select class="form-control" name="sexo">
      </div>
      <?php
      $conexion = mysqli_connect("localhost", "root", "", "base2") or
        die("Problemas con la conexión");

      $registros = mysqli_query($conexion, "select codigo,sexo from genero") or
        die("Problemas en el select:" . mysqli_error($conexion));
      while ($reg = mysqli_fetch_array($registros)) {
        echo "<option value=\"$reg[codigo]\">$reg[sexo]</option>";
      }
      ?>
    </select>
    <br>
    <div class="form-check mb-3">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="remember"> Recordar
            </label>
          </div>
    <input type="submit" class="btn btn-primary" value="Registrar">
      </a>
      </div>
    </div>
  </form>
  <br>
  <a href="menu.php"> <br>
  <button class="btn btn btn-primary" id="BotonAgregar">Regresar </button>
  </a>
</body>

</html>