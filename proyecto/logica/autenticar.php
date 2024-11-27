<?php
session_start();
$usuario= $_SESSION['nombre_empleado'];//413112576


if(!isset($usuario)){

        header("location: index.php");
}
?>