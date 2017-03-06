<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ejercicio Arrays</title>
</head>
<body>
  <?php
    $coches = array(32, 11, 45, 22, 78, -3, 9, 66, 5);
    echo "$coches[5] <br/>";

    $importe = array(32.583, 11.239, 45.781, 22.237);
    echo "$importe[1] <br/>";

    $confirmado = array(true, true, false, true, false, false);
    echo "$confirmado[0] <br/>";

    $jugador = array("Crovic", "Antic", "Malic", "zulic", "Rostrich");
    echo "La alineación del equipo es " . $jugador[0] . ", " . $jugador[1] . ", " . $jugador[2] . ", " . $jugador[3] . ", " . $jugador[4] . ".";

  ?>
</body>
</html>