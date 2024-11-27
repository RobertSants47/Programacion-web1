<?php
 
require './logica/autenticar.php';
require 'logica/conexion.php';
// se usa el requiere para si psi se necesita el archivo conexion

mysqli_set_charset($conexion,'utf8');


//genear el query
$consulta_sql="SELECT * FROM empleado";

//mandar el query por medio de la conexion y almacenaremos el resultado en una variable
$resultado = $conexion->query($consulta_sql);

// Retorna el numero de filas del resultado. Si encuentra mas de uno lo usamos para imprimir el resultado en nuestra tabla
$count = mysqli_num_rows($resultado); 
 
?>

<!DOCTYPE html>
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
        <div>
            <h2>Empleados Registrados</h2>
            <?php if ( $count>0 ): ?>
                <table>
                    
                    <thead>
                        <tr>
                            <th>Número</th>
                            <th>Número de teléfono</th>
                            <th>Nombre de Empleado</th>
                            <th>Departamento</th>
                            <th>Id Empleado</th>
                            <th>Correo electrónico</th>
                            <th>Contraseña</th>
                            <th>Fecha de registro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while( $row = mysqli_fetch_assoc($resultado)):?>
                            <tr>
                                <?php
                                echo"<td>". $row['numero'] ."</td>";
                                echo"<td>". $row['numero_telefono'] ."</td>";
                                echo"<td>". $row['nombre_empleado'] ."</td>";
                                echo"<td>". $row['departamento'] ."</td>";
                                echo"<td>". $row['id_empleado'] ."</td>";
                                echo"<td>". $row['email'] ."</td>";
                                echo"<td>". $row['password'] ."</td>";
                                echo"<td>". $row['fecha_registro'] ."</td>";
                                ?>
                            </tr>
                            <?php endwhile; ?>
                    </tbody>
                </table>
                <?php endif; ?>
        <h4><a class="waves-effect waves-light btn, blue lighten-1, text white" href='EliminarUsuario.php'>Elimnar Usuario</a></h4>
        <h4><a class="waves-effect waves-light btn, blue lighten-1, text white" href='registro.php'>Registro</a></h4>
        <h4><a href='./logica/salir.php'>SALIR</a></h4>
        </div>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>