<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="./materialize/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="./materialize/js/materialize.min.js"></script>

<?php
// se usa el requiere para si psi se necesita el archivo conexion
require "./logica/conexion.php";
mysqli_set_charset($conexion,'utf8');

//genear el query
$consulta_sql="SELECT * FROM empleado";

//mandar el query por medio de la conexion y almacenaremos el resultado en una variable
$resultado = $conexion->query($consulta_sql);

// Retorna el numero de filas del resultado. Si encuentra mas de uno lo usamos para imprimir el resultado en nuestra tabla
$count = mysqli_num_rows($resultado); 

echo "<table border='2' >
    <tr>
        <th>Número</th>
        
        <th>Número de teléfono</th>
        <th>Nombre de Empleado</th>
        <th>Departamento</th>
        <th>Id Empleado</th>
        <th>Correo electrónico</th>
        <th>Contraseña</th>
        <th>Fecha de registro</th>
    </tr>";

if ( $count>0 ){
    //aqui se pintarian los registro de la DB
    while( $row = mysqli_fetch_assoc($resultado)  ){
     echo "<tr>";
     echo"<td>". $row['numero'] ."</td>";
     echo"<td>". $row['numero_telefono'] ."</td>";
     echo"<td>". $row['nombre_empleado'] ."</td>";
     echo"<td>". $row['departamento'] ."</td>";
     echo"<td>". $row['id_empleado'] ."</td>";
     echo"<td>". $row['email'] ."</td>";
     echo"<td>". $row['password'] ."</td>";
     echo"<td>". $row['fecha_registro'] ."</td>";
     echo "</tr>";
     
    }
    echo "</table>";

}else{
    
    
    
    echo " <h1 style='color:red' >Sin Ningun registro</h1>";
 } 
  echo "
    <h1><a href='EliminarUsuario.php'>Elimnar Usuario</a></h1>
    <h1><a href='registro.php'>Registro</a></h1>
    ";
    
?>