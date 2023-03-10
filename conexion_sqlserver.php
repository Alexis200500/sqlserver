<?php

  //Configurar datos de acceso a la BD
  $dbuser = "root";
  $userpass ="";
  $dsn = "sqlsrv:Server=ALEXIS\\SQLEXPRESS;Database=notas_php"; $dbuser; $userpass;

  try {
    // crear conexión a SQLSERVER
    $con = new PDO($dsn);

    // Mostrar mensaje si la conexión es correcta

    if ($con) {
      echo "Conexion correcta";
    }


  } catch (PDOException $e) {
    // si hay error
    echo $e->getMessage();
  }


?>