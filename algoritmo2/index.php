<?php

//genera claves alfa numericas con caracteres especiales incluyendo mayusculas y minusculas

$caracteres = "abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ1234567890_$%&/";
$cad ="";

// este for se ehecuta las veces que sea necesario para generar la clave aleatoria
for ($i=0;$i<15;$i++){
    $cad .= substr($caracteres, rand (0,75) , 1); 
}

// imprimo mi clave aleatoria
echo  ("su clave es: " . $cad );

?>