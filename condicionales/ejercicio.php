<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ejercicio condicionales</title>
</head>
<body>
  <?php
    $haceFrio = 20;
    $respuesta = "";

    $temperatura = ($haceFrio < 20) ? $respuesta = "Hace frio" : $respuesta ="No hace frio";
    echo $respuesta;
  ?>
</body>
</html>