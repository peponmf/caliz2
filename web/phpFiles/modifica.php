
<?php

include 'abreConexion.php';

if ( isset($_POST['nombre']) && 
        isset($_POST['mail'])&& 
        isset($_POST['telefono'])&& 
        isset($_POST['direccion'])&& 
        isset($_POST['celular']) ) {

    
    $sql = "UPDATE `personas` SET 
                                `clave`='$_POST[clave]',
                                    `nombre`='$_POST[nombre]',
                                        `mail`='$_POST[mail]',
                                            `telefono`='$_POST[telefono]',
                                                `direccion`='$_POST[direccion]',
                                                    `celular`='$_POST[celular]'
                WHERE `clave`='$_POST[clave]'";

}
 else {
    echo "no hay datos que agregar";
}



$query = mysqli_query ($con, $sql);


?>

 