<?php

#Ejemplo 4: El protocolo de texto devuelve cadenas de manera predeterminado

  #$mysqli->set_charset('utf8');
  $mysqli = mysqli_connect("192.168.176.12", "mauro", "root", "test");
  if ($mysqli->connect_errno) {
    echo "Falló al conectarse a MySQL: (" . $mysqli->connect_errno . ") " . $msqli->connect_errno;
  }

  $sql = "SELECT COUNT(*) AS _num FROM TEST;";
  $sql.= "INSERT INTO test(id) VALUES (8);";
  $sql.= "SELECT COUNT(*) AS _num FROM test;";

  if(!$mysqli->multi_query($sql)){
    echo "fallo la multiconsulta: (" . $msqli->errno . ") " . $mysqli->error;
  }

  do{
    if($resultado = $mysqli->store_result()){
      var_dump($resultado->fetch_all(MYSQLI_ASSOC));
      $resultado->free();
    }
  } while ($mysqli->more_results() && $mysqli->next_result());


?>