<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operadores</title>
</head>

<body>
    <h1>operadores</h1>

    <h2>aritmeticos</h2>

    <?php
    $x = 9;
    $y = 5;
    $suma = $x + $y;
    $resta= $x -$y;
    echo($suma);
    ?>

    <h2> de comparacion</h2>
    <?php
      $x = 9;
      $y = 3;
      echo($x==$y);
    ?>
    <h2>logicos</h2>
    <?php
      $x = 9;
      $y = 3;
      if( $x==9 && $y==3)
      {
        echo "estas en lo correcto";
      }
    ?>
    <h2>de union de cadenas</h2>
    <?php
      $nombre = "zharick";
      $apellido = "rodriguez";
      $nombre_completo= $nombre."".$apellido;
      {
        echo $nombre_completo ;
      }
    ?>
    
     
</body>

</html>