<?php

#Ejemplo 4: El protocolo de texto devuelve cadenas de manera predeterminado

  #$mysqli->set_charset('utf8');
  $mysqli = mysqli_connect("192.168.176.12", "mauro", "root", "test");
  if ($mysqli->connect_errno) {
    echo "Falló al conectarse a MySQL: (" . $mysqli->connect_errno . ") " . $msqli->connect_errno;
  }

  $resultado = $mysqli->query('Select codigo, nombre from pais where codigo = 1');
  $fila = $resultado->fetch_assoc();

  printf("id = %s (%s)\n", $fila['codigo'], gettype($fila['codigo']));
  printf("nombre = %s (%s)\n", $fila['nombre'], gettype($fila['nombre']));

?>