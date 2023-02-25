<?php
    
   //LE PEDIMOS AL USUARIO QUE INGRESE UNA FRASE Y UNA PALABRA LA CUAL SE REMPLAZARA EN LOS ESPACIOS DE LA FRASE INGRESADA
    $frase =  readline ("Introduce una frase: ");
    $palabra = readline("ingrese una palabra: ");

    //con str_replace remplasamos los espacios por la palabra que ingreso el usuario por pantallaa
    $invertir=str_replace(" " ,"$palabra", $frase);

    // con strrev invertimos la frase que se ingreso
    echo strrev ($invertir);

?>
