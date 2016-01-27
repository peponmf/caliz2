<?php
//altas.php

include 'abreConexion.php';


$sql="INSERT INTO personas (clave, 
            nombre, 
            mail, 
            telefono, 
            direccion, 
            celular) 
            VALUES 
            
            ('$_POST[clave]', 
                '$_POST[nombre]',
                    '$_POST[mail]',
                        '$_POST[telefono]',
                            '$_POST[direccion]',
                                '$_POST[celular]');";






mysqli_query($con,$sql);

$afect= mysqli_affected_rows($con);

echo "<br>";
echo "renglon afectado: $afect";

echo "<br>";
echo "ha insertado el siguiente registro:";
echo "<br>";
echo "clave: $_POST[clave]";
echo "<br>";
echo "nombre: $_POST[nombre]";
echo "<br>";
echo "mail: $_POST[mail]";
echo "<br>";
echo "telefono: $_POST[telefono]";
echo "<br>";
echo "direccion: $_POST[direccion]";
echo "<br>";
echo "celular: $_POST[celular]";

echo "<br>";

?>

