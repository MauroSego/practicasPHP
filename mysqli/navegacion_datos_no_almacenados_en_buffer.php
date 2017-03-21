<?php

    #$mysqli->set_charset('utf8');
    $mysqli = mysqli_connect("192.168.176.12", "mauro", "root", "test");
    if ($mysqli->connect_errno) {
      echo "Falló al conectarse a MySQL: (" . $mysqli->connect_errno . ") " . $msqli->connect_errno;
    }

    $mysqli->real_query("Select codigo from pais order by codigo asc");
    $resultado = $mysqli->use_result();

    echo "orden del conjunto de resultados...\n";
    while($fila = $resultado->fetch_assoc()){
      echo " codigo = " . $fila['codigo'] . "\n";
    }

?>