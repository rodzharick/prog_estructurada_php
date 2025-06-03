<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funcionesen php</title>
</head>
<body>
    <h1>funciones</h1>
    <p>unafuncion es un bloque de codigo que introducimos en nuestra pagina y que puede ser utlizado a lo largo de nuestro codigo de php. La principal ventaja de la funciones es que nos permite ahorrar codigo </p>
    <p>para definir funciones se emplea la sentencia funtion ejemplo: function suma$($)</p>
    <p>la funciones pueden recibir tantos argumentos como sean necesarioa separados con comas</p>
    <?php
        function sumar($x,$y);
        {
            $z =$x +$y;
            return $z;
    
        }
        // invoco o llamo a la funcion sumar
        $resultado = sumar(x:5, y:12);
        echo"resultado" . $resutado;
    ?>
</body>
</html>
