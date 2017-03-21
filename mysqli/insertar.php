  <?php

    $servername = "192.168.176.12";
    $username = "mauro";
    $password = "root";
    $dbname = "test";

    //crear conexión 
    $conn = new mysqli($servername, $username, $password, $dbname);

    //check conexión
    if($conn->connect_error){
      die("Conecction failed: " . $conn->connect_error);
    }

    $legajo = $_POST["legajo"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $interno = $_POST["interno"];

    $sql = "INSERT INTO datos_personales VALUES ('$legajo', '$nombre', '$apellido', '$interno')";
    IF($conn->query($sql) === TRUE){
      echo "Se cargó correctamente";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

  ?>