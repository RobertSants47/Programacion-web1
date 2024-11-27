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
    <div class="row">
        <div>
            <div class="input-field col s6">
                <h1 class="center">Login Error</h1>
                <form method="POST"  action="./logica/login.php">
                    <input type="text" name="id_empleado" placeholder="Ingresa tu ID" />
                        <br />
                    <input type="text" name="password" placeholder="Ingresa tu contraseña" />
                        <br />
                    <button class="btn waves-effect waves-light, blue lighten-1" type="submit">Inicar Sesion</button>
                </form> 
            </div>
        </div>
   </div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
