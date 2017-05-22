<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/agregar2.css">
    <link rel="icon" type="image/png" href="img/favicon.png" />
  </head>
  <body>

  <div class="cero">
    <div class="uno">
      <img src="img/bannerPrincipal.jpg" class="logo" >
    </div>

    <div class="unoYMedio">
      <form action="homeDos.html" method="get">
        <label for="usuario">Usuario</label>
        <input type="text" id="user" name="user" placeholder="Usuario" />
        <label for="pass">Contraseña</label>
        <input type="password" id="pass" name="pass" placeholder="******" />
        <input type="submit" value="Entrar" class="login" onclick="verificar();"></input>
      </form>
    </div>

    <div class="dos">
      <ul class="nav">
       <li><a class="hsubs" href="#">Panes</a>

                    <ul class="subs">
                        <li><a href="CrearPan.html">Registrar Pan</a></li>
                        <li><a href="MostrarPan.html">Mostrar Pan</a></li>
                        <li><a href="BuscarPan.html">Buscar Pan</a></li>
                        <li><a href="ModificarPan.html">Modificar Pan</a></li>
                        <li><a href="EliminarPan.html">Eliminar Pan</a></li>
                    </ul>

        <li><a class="hsubs" href="#">Gelatinas</a>

                    <ul>
                    <li><a href="CrearGelatina.html">Registrar Gelatina</a></li>
                        <li><a href="MostrarGelatina.html">Mostrar Gelatina</a></li>
                        <li><a href="BuscarGelatina.html">Buscar Gelatina</a></li>
                        <li><a href="ModificarGelatina.html">Modificar Gelatina</a></li>
                        <li><a href="EliminarGelatina.html">Eliminar Gelatina</a></li>

          
                    </ul>
        <li><a class="hsubs" href="#">Pasteles</a>

              <ul>
                    <li><a href="CrearPastel.html">Registrar Pasteles</a></li>
                        <li><a href="MostrarPastel.html">Mostrar Pasteles</a></li>
                        <li><a href="BuscarPastel.html">Buscar Pasteles</a></li>
                        <li><a href="ModificarPastel.html">Modificar Pasteles</a></li>
                        <li><a href="EliminarPastel.html">Eliminar Pasteles</a></li>

          
                    </ul>



        <li><a class="hsubs" href="#">Usuarios</a>

        <ul>
                    <li><a href="CrearUsuario.html">Registrar Usuario</a></li>
                        <li><a href="MostrarUsuario.html">Mostrar Usuario</a></li>
                        <li><a href="BuscarUsuario.html">Buscar Usuario</a></li>
                        <li><a href="EliminarUsuario.html">Eliminar Usuario</a></li>

          
                    </ul>
    </div>
    <div class="tres" id="rotator">
    
	<form action= "homeAdmin.html" method="post">     
    
    <fieldset>

          <legend>Pasteles Registrados</legend>
          


<section>
  	<?php

  	include 'config.php';

  	$conn= new mysqli($servername, $username, $password, $dbname);

  	if($conn->connect_error){
  		die("fallo conexion".$conn->connect_error);
  	}
  	$sql="SELECT*FROM pastel";
  	$result = $conn->query($sql);

  	if($result->num_rows > 0){
  		while($row=$result->fetch_assoc()){
  		echo "código: " .$row["Id_pastel"]."<br>"."Nombre: ". $row["NombrePastel"]."<br>". "Precio: $".$row["PrecioPastel"]."<br>"."Tamanio: ". $row["TamanioPastel"]."<br>". "Sabor: ".$row["SaborPastel"]."<br>" ."Tipo: ".$row["TipoPastel"]."<br>" ."Descripcion: ".$row["Descripcion"]."<br><br>";
  		}
  	}else{
  		echo"0 resultados";
  	}
  	$conn->close();
  	?>
  </section>

      <button class="button" name="boton"> Volver al index </button>
    
    </fieldset>

    </div>

    <div class="cinco">
      <p>
        PANADERIA ROCKET S.A DE C.V ® Todos los derechos reservados. <br/>Desarrollada por el Equipo Rocket.
      </p>
      <img src="img/logoNuevo.png" class="logoFinal" />
    </div>

  </div>

  <script type="text/javascript">
  
  </script>
  
    
  </body>
</html>