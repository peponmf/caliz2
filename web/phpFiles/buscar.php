<html>
    
<style>
	body {font: 12x Verdana; color: blue; background:ligthgreen;}
</style>
<body>
<?php

include 'abreConexion.php';

$sql = "SELECT * FROM `personas` WHERE `clave` = '$_POST[clave]'";

echo "<p align='center'><b><font color='navy' size=5>Busqueda.... ";
echo "<hr size=8 color='navy' width='100%'>";
$query = mysqli_query ($con, $sql);
 echo "<table  align='center'  align='top' border=1 bgcolor='navy'  cellspacing=3>";
  
    echo "<tr bgcolor='navy' align='center'>";
    echo "<td width='100'><font color='white'>",'Clave',"</td>";
    echo "<td  width='200'>",'Nombre',"</td>";
    echo "<td  width='200'>",'Correo',"</td>";
    echo "<td  width='100'>",'Telefono',"</td>";
    echo "<td  width='200'>",'Direccion',"</td>";
    echo "<td  width='100'>",'Celular',"</td>";
    echo "</tr>";
  
  
 
while ($reg=mysqli_fetch_row($query)){
    echo "<tr>";
	
	foreach($reg as $cambia){
	  echo "<td bgcolor='white'><font color='navy'>",$cambia,"</td>";
	  }
                  
  }

  echo "</table>";


?>
</style>
</body>

</html>
 