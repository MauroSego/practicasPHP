<?php
    #$mysqli->set_charset('utf8');
    /*EN ESTA PARTE SE REALIZA LA CONEXIÓN CON LA BASE DE DATOS*/
    $mysqli = mysqli_connect("localhost", "mauro", "root", "test");
    if( mysqli_connect_errno()){
      echo "Error de conexion a la BD: " . mysqli_connect_err();
      exit();
    }
    #Declaración de un query para mysql
    $query = "select * from ciudades";
    #ejecución del query
    $resultado = $mysqli->query($query) or die ($mysqli->error);
    #Leo la cantidad de registros que devuelve
    $numregistros = $resultado->num_rows;
    echo "<p>El número de ciudades es : " ,$numregistros, ".</p>";

    /*
    Este query era una prueba de reescribir el resultado pero consultaba la misma tabla, no era necesario
    ------------
    $resultado = $mysqli->query($query_tabla) or die ($mysqli->error. " en la linea " . (__LINE__-1));*/

    #En base al query anterior creo una tabla, el fetch_assoc me devuelve los resultados como una tabla asociada
    echo "<table border=2><tr><th>idciudades</th> <th>ciudad</th></tr>";
    while($registro = $resultado->fetch_assoc()) {
      echo "<tr>";
      foreach ($registro as $campo)
        echo "<td>",$campo, "</td>";
        echo "</tr>";
    }
    #imprimo la tabla y libero la memoria del resultado
    echo "</table>";
    $resultado->free();
    #query para insertar datos dentro del servidor de mysql
    $query_insert = "insert into ciudades (idciudades, ciudad) values (8, 'Los Angeles')";
    #ejecución
    $mysqli->query($query_insert);

?>
