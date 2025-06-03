<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variables y constantes en php</title>
</head>
<body>
    <h1> variables y constantes en php</h1>
    <?php
    // las variables se representan enteponiendo el simbolo $ a la palabra que se use como variables
    // PHP es sensitive case
    // las variables no pueden empezar con un numero
    //no es neccesario en php especificar el tipo de variables pero si se debe saber cuando usar las comillas para el caso de variables de tipo cadena o string.
    
    //asignamos a la variable el valor 5
    $a=5;
    //asignamos a la variables b el caracter  7 como cadena
    $b="7";
    echo "<h2>variables</h2>";
    // mostrar el valor de la variable a
    echo($a);
    echo"<br>";


    // mostrar el valor de la variabble b
    echo($b);
    echo"<br>";
    echo "<h2>constantes</h2>";
    /* el valor de una constante no cambia o se mantiene fijo durante la ejecucion de una pagina
    la forma de definir las constantes es mediante el uso de la instruccion define  */
    define("capital_colombia",value:"bogota");

    ?>

</body>
</html>