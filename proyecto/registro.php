<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="./materialize/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="./materialize/js/materialize.min.js"></script>

<?php
session_start();
$id_empleado= $_SESSION['nombre_empleado'];


if(!isset($id_empleado)){

        header("location: ./index.php");
}else{
    
    echo "<h1>Hola tu numero de empleado es $id_empleado </h1> ";
    echo "<h3><a href='logica/salir.php'>SALIR</a></h3>";
    // se usa el requiere para si psi se necesita el archivo conexion
require "./logica/conexion.php";
echo'

<html>
<head>
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="./materialize/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="./materialize/js/materialize.min.js"></script>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<header>
    <h3>Registro en mi DB</h3>
</header>
<div>
    <form action="./logica/enviarRegistro.php" method="post">
        <hr>
        <div >
            <label for="nombre_empleado">Ingresa nombre de empleado:</label>
            <input type="text" name="nombre_empleado" required maxlength="100" placeholder="Ingresa tu nombre">
            <br><br>
            <label for="numero_telefono">Ingresa número de teléfono:</label>
            <input type="text" name="numero_telefono" required maxlength="10" placeholder="Ingresa tu teléfono">
            <br><br>
            <label for="departamento">Departamento:</label>
            <input type="text" name="departamento" required maxlength="100" placeholder="Ingresa tu departamento">
            <br><br>
            <label for="id_empleado">ID:</label>
            <input type="text" name="id_empleado" required maxlength="100" placeholder="Ingresa tu ID">
            <br><br>
            <label for="email">Correo:</label>
            <input type="email" name="email" required maxlength="100" placeholder="Ingresa tu correo" class="validate">
            <br><br>
            <label for="password">Contraseña:</label>
            <input type="password" name="password" required maxlength="8" placeholder="Ingresa tu contraseña">
            <br><br>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="submit">Enviar registro</button>
  </button>
    </form>
</div>
<h4><a class="waves-effect waves-light btn, blue lighten-1, text white" href="./registro.php">Nuevo registro</a></h4>
<h4><a class="waves-effect waves-light btn, blue lighten-1, text white" href="./Principal.php">Ver registros</a></h4>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>';

}
?>