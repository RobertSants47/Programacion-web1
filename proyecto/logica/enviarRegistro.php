<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="./materialize/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="./materialize/js/materialize.min.js"></script>

<?php
include "./conexion.php";
mysqli_set_charset($conexion,'utf8');
$nombreUser=$_POST['nombre_empleado'];

$buscarusuario="SELECT * FROM empleado WHERE nombre_empleado ='$nombreUser'";

$resultado = $conexion -> query($buscarusuario);
$count =mysqli_num_rows($resultado);
if($count==1){
    echo"<h1>El empleado ya está registrado</h1>";
    echo"<a href='../registro.php'>Nuevo registro</a>";

}else{
    mysqli_query($conexion,"INSERT INTO empleado(
        nombre_empleado,numero_telefono,departamento,id_empleado,email,password)
        VALUES(
            '$_POST[nombre_empleado]',
            '$_POST[numero_telefono]',
            '$_POST[departamento]',
            '$_POST[id_empleado]',
            '$_POST[email]',
            '$_POST[password]'
            
        )");
        echo"<br><h1>Empleado creado con éxito</h1>";
        echo"<a href='../registro.php'>Puedes generar un nuevo registro</a>";
        echo"<a href='../index.php'>Ver registros</a>";
}

?>