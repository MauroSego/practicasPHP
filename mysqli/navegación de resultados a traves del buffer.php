<?php

    #$mysqli->set_charset('utf8');
    $mysqli = mysqli_connect("192.168.176.12", "mauro", "root", "test");
    if ($mysqli->connect_errno) {
      echo "Falló al conectarse a MySQL: (" . $mysqli->connect_errno . ") " . $msqli->connect_errno;
    }

    $resultado = $mysqli->query("Select codigo from pais order by codigo asc");

    echo "Orden inverso...\n";
    for ($num_fila = $resultado->num_rows - 1; $num_fila >= 0; $num_fila--){
      $resultado->data_seek($num_fila);
      $fila = $resultado->fetch_assoc();
      echo " codigo = " . $fila['codigo'] . "\n";
    }

    echo "Orden del conjunto de resultados...\n";
    $resultado->data_seek(0);
    while($fila = $resultado->fetch_assoc()){
      echo " codigo = " . $fila['codigo'] . "\n";
    }
?>