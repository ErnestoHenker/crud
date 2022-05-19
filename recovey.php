<html>

<head>
  <title>Problema</title>
</head>

<body>

<?php

$conexion = mysqli_connect("localhost", "root", "", "registro") or die("Problemas con la conexión");

$registros = mysqli_query($conexion, "select *from registro where correo='$_REQUEST[correo]'") or
die("Problemas en el select:" . mysqli_error($conexion));

$x=0;

while ($reg = mysqli_fetch_array($registros)) {

$x=1;
   
$para      = $reg['correo'];
$asunto    = 'RECUPERAR CONTRASEÑA';
$descripcion   =  "GRACIAS POR CONTACTARNOS SEÑOR(A):"." ".$reg['usuario']."  "."NOMBRE DE USUARIO:" ." ". $reg['correo']."  "."CONTRASEÑA:"." ". $reg['clave'];
$de = 'From: vmartinez9526@misena.edu.co';

if (mail($para, $asunto, $descripcion, $de))
   {
header("Location:recuperarpasword.php?correo=1");
}
} 
if($x==0){
header("Location:recuperarpasword.php?error=1");
}
mysqli_close($conexion);
?>

</body>

</html>