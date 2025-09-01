<?php

  $host = "localhost";    
  $user = "root";    
  $password = "";    
  $db = "car_showroom";    

  $connection = new mysqli($host, $user, $password, $db);

  if ($connection->connect_error){
    die("Database not Connected: " . $connection->connect_error);

  }

?>
