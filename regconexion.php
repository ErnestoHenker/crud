<html>
<head>
  <title>Problema</title>
</head>
<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base2") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into registro (usuario, clave,correo) values('$_REQUEST[usuario]','$_REQUEST[clave]','$_REQUEST[correo]')") or
    die("Problemas en la inserción:" . mysqli_error($conexion));

    echo"<script>alert('usuario Registrado')</script>";
    echo"<script> setTimeout(\"location.href='index.php'\",1000)</script>";

    mysqli_close($conexion);
  ?>
</body>
</html>
