<?php
require "conexion.php";
mysqli_set_charset($conexion, 'utf8');

$registroEliminado = $_POST['id_empleado'];

$consulta="DELETE FROM empleado WHERE id_empleado = ";

mysqli_query($conexion, $consulta . $registroEliminado);
mysqli_close($conexion);
header('Location: ../EliminarUsuario.php');

?>