<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Strings longitudes</title>
</head>
<body>
  <?php

    #lee cantidad de letras

    $nombre = 'Mauro';
    $N = strlen($nombre);
    echo "La longitud del nombre es $N <br/>";

    #Sucstrae letras 

    $cadena = "Cadena";
    $sub1 = substr($cadena, 2);
    $sub2 = substr($cadena, 2, 2);

    echo "La subcadena número uno es: $sub1 <br/>";
    echo "La subcadena número dos es: $sub2 <br/>";

  ?>
</body>
</html>