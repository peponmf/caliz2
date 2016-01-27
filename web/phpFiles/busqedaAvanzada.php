<html> 
<body> 
  
<?php 

include 'abreConexion.php';

 
$result = "SELECT * FROM personas WHERE clave = 16";//'$_POST[clave]'";

if ($row = mysql_fetch_array($result)){ 
      echo "<table border = '1'> \n"; 
//Mostramos los nombres de las tablas 
echo "<tr> \n"; 
while ($field = mysql_fetch_field($result)){ 
            echo "<td>$field->name</td> \n"; 
} 
      echo "</tr> \n"; 
do { 
            echo "<tr> \n"; 
            echo "<td>".$row["clave"]."</td> \n"; 
            echo "<td>".$row["nombre"]."</td> \n"; 
            echo "<td>".$row["mail"]."</td> \n"; 
            echo "<td>".$row["telefono"]."</td> \n"; 
            echo "<td>".$row["direccion"]."</td> \n"; 
            echo "<td>".$row["celular"]."</td> \n"; 
            echo "<td><a href='mailto:".$row["mail"]."'>".$row["mail"]."</a></td> \n"; 
            echo "</tr> \n"; 
      } while ($row = mysql_fetch_array($result)); 
            echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?> 
  
   
    
    
</body> 
</html>