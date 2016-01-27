<?php
global $con;
date_default_timezone_set("Europe/Madrid");
print "<p>Ejemplo 1: " . date("d/m/y H:i:s") . "</p>\n";
print "<p>Ejemplo 2: " . date("l, F jS Y ") . "</p>\n";




$con = mysqli_connect("localhost","root","","contactos","3306");

if (mysqli_connect_errno())
  {
  echo "Fallo al conectarse con MySQL: ".mysqli_connect_error();
  }
  else{
      echo 'Conexion todo un exito';
      echo "<br>";
  }

  
?>
