<html>

<head>
  <title>insertar</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base2") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into clientes(cedula,nombre,sexo) 
                           values ($_REQUEST[cedula],'$_REQUEST[nombre]',$_REQUEST[sexo])") or
    die("Problemas en el select" . mysqli_error($conexion));
  mysqli_close($conexion);
  echo "Su genero ha sido registrado.";
  echo"<script> setTimeout(\"location.href='menu.php'\",1000)</script>";
  ?>
</body>

</html>