<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Consultar</title>
</head>
<body>
    <div class="container mt-3">
        <h2>Recuperar Contraseña</h2>
        <form action="recovey.php">
          <div class="mb-3 mt-3">
            <label for=""> Ingrese Correo Electronico:</label>
            <input type="email" class="form-control"  placeholder="Ingrese su Correo" name="correo"  required >
            <?php 
            if (isset($_REQUEST['correo'])){
              echo "Correo enviado satisfactoriamente"."<br>"."<br>";
            }
            if (isset($_REQUEST['error'])){
            echo "el correo no se encuentra en la base de datos"."<br>"."<br>";
            }
            ?>
          </div>
          <button type="submit" class="btn btn-primary">Envíar</button>
        </form>
        <br>
        <a href="index.php">
            <button type="reset" class="btn btn-primary">Cancelar</button>
        </a>
</body>
</html>