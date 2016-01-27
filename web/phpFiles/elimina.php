<html>
    <body>
<?php

include 'abreConexion.php';


$sql="DELETE FROM personas where clave = '$_POST[clave]'"; 
//"DELETE FROM personas where clave='$_POST[clave]'";

mysqli_query($con,$sql);

$afect= mysqli_affected_rows($con);

    if ($afect= mysqli_affected_rows($con)){

        echo "ha eliminado el siguiente registro:$_POST[clave] ";

        echo "$_POST[clave]";
    }
    else{
        echo "no se ha eliminado el registro:";
    }
    
?>
    </body>
</html>
