<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="./materialize/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="./materialize/js/materialize.min.js"></script>

<?php   
session_start();
$id_empleado= $_SESSION['nombre_empleado'];//413112576

if(!isset($id_empleado)){

        header("location: ./index.php");
}else{
    
    echo "<h1>Hola tu numero de empleado es $id_empleado </h1> ";
    echo "<h3><a href='./logica/salir.php'>SALIR</a></h3>";
    // se usa el requiere para si psi se necesita el archivo conexion
require "./logica/conexion.php";

echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 style=" text-align: center;" >Elimina Usuario</h1>
    <form style=" text-align: center;" method="POST" action="./logica/deleteUsuario.php">

        <input  type="text" name="id_empleado" placeholder="ID" class="center" />
        <br />
        <button class="btn waves-effect waves-light, blue lighten-1" type="submit">Eliminar usuario</button>

    </form>
    
    <h1><a href="Principal.php">Inicio de listas</a></h1>

</body>

</html>';
    
    }
?>