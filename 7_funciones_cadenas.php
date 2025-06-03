<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funciones cadenas </title>
</head>
<body>
    <h1>funciones para manipular cadenas</h1>
    <p>Las funciones para manipular cadenas en programación son herramientas que permiten realizar diversas operaciones sobre textos o secuencias de caracteres. Estas funciones facilitan tareas como la búsqueda, modificación, transformación y análisis de cadenas, adaptándose a diferentes necesidades dentro del código.</p>
    <h2>funcion subtr()</h2>
    <p>ejemplo:</p>
    <?php
        $texto = "Hola, mundo!";
        $subcadena = substr($texto, 6, 5); // Extrae "mundo"
        echo $subcadena; // Resultado: "mundo"
?>
    <h2>funcion ord()</h2>
    <?php
        $char ='A';
        $ascci_value= ord($char);
        echo"el valor ASCII de '$char' es $ascii_value";
        $caracter = 'A';
        $codigo = ord($caracter);
        echo "El código ASCII de '$caracter' es: $codigo"; // Resultado: El código ASCII de 'A' es: 65
    ?>
    <h2>funcion printf()</h2>
    <?php
     $nombre = "Juan";
     $edad = 25;
     
     // Usamos printf() para dar formato a la salida
     printf("Hola, mi nombre es %s y tengo %d años.", $nombre, $edad);
     Hola, mi nombre es Juan y tengo 25 años.

    ?>
    <h2>funcion  sprintf()</h2>
    <?php
        $nombre = "Juan";
        $edad = 25;

        // Usamos sprintf() para formatear la cadena
        $mensaje = sprintf("Hola, mi nombre es %s y tengo %d años.", $nombre, $edad);

        echo $mensaje; // Resultado: Hola, mi nombre es Juan y tengo 25 años.
    ?>
    <h2>funcion  strtolower()</h2>
    <?php
        $texto = "Hola, MUNDO!";
        $texto_minusculas = strtolower($texto);
        echo $texto_minusculas; // Resultado: "hola, mundo!"
    ?>
    <h2>funcion  strtoupper()</h2>
    <?php
        $texto = "Hola, mundo!";
        $texto_mayusculas = strtoupper($texto);
        echo $texto_mayusculas; // Resultado: "HOLA, MUNDO!"
    ?>
    <h2>funcion  ereg()</h2>
    <?php
        $cadena = "Hola, mundo!";
        if (preg_match("/Hola/", $cadena)) {
        echo "Se encontró 'Hola' en la cadena.";
        } else {
         echo "No se encontró 'Hola'.";
        }
    ?>
    <h2>funcion  eregi()</h2>
    <?php
        $cadena = "Hola, Mundo!";
        if (preg_match("/hola/i", $cadena)) {
        echo "Se encontró 'hola' en la cadena.";
        } else {
        echo "No se encontró 'hola'.";
        }
    ?>
    

</body>
</html>