<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <?php

  $tipo = 'Rueda de camión';
  $grosor = 0.33;
  $diametro = 1.5;
  $marca = "Kimashuki";
  $msg = "";

  if($diametro > 1.4) {
    $msg = 'La rueda es para un vehículo grande';
    echo $msg;    
  }
  else if ($diametro <= 1.4){
    $msg = 'La rueda es para un vehículo pequeño';
    echo $msg;
    }
  else {
    $msg = 'No existe un tamaño de rueda válido';
    echo $msg;
    }

  $msg = ($diametro > 1.4) ? $msg = 'La rueda es para un vehículo grande' : $msg = 'La rueda es para un vehículo pequeño'

  ?>
</body>
</html>
