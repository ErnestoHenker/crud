<?php
header('Content-Type: application/json');

require("conexion.php");

$conexion = retornarConexion();

switch ($_GET['accion']) {
    case 'listar':
        $datos = mysqli_query($conexion, "select codigo,cedula,nombre,apellido,telefono,sexo,correo from clientes");
        $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
        echo json_encode($resultado);
        break;

    case 'agregar':
        $respuesta = mysqli_query($conexion, "insert into clientes(cedula,nombre,apellido,telefono,sexo,correo) values ('$_POST[cedula]','$_POST[nombre]','$_POST[apellido]',$_POST[telefono],'$_POST[sexo]','$_POST[correo]')");
        echo json_encode($respuesta);
        break;

    case 'borrar':
        $respuesta = mysqli_query($conexion, "delete from clientes where codigo=$_GET[codigo]");
        echo json_encode($respuesta);
        break;

    case 'consultar':
        $datos = mysqli_query($conexion, "select codigo,cedula,nombre,apellido,telefono,sexo,correo from clientes where codigo=$_GET[codigo]");
        $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
        echo json_encode($resultado);
        break;

    case 'modificar':
        $respuesta = mysqli_query($conexion, "update clientes set
                                                  cedula='$_POST[cedula]',
                                                  nombre='$_POST[nombre]',
                                                  apellido='$_POST[apellido]',
                                                  telefono=$_POST[telefono],
                                                  sexo='$_POST[sexo]',
                                                  correo='$_POST[correo]'
                                               where codigo=$_GET[codigo]");
        echo json_encode($respuesta);
        break;
}
