<html>
<head>
  <title>Problema</title>
</head>

<body>

  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base2") or
    die("Problemas con la conexión");


  $registros = mysqli_query($conexion, "select usuario, clave  from registro ") or
    die("Problemas en el select:" . mysqli_error($conexion));
  $a=0;
  while ($reg = mysqli_fetch_array($registros)) {
  if(($reg['usuario']==$_REQUEST['usuario'])and ($reg['clave']==$_REQUEST['clave'])){

    header("location:menu.php");

    $a=1;
    }
   }
   if($a==0){echo "<script>alert('usuario o contraseña inconrrecta')</script>";}
   echo"<script> setTimeout(\"location.href='index.php'\",1000)</script>";



  mysqli_close($conexion);
  ?>

</body>

</html>
