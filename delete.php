<?php

include 'db.php';

?>

<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM car_details WHERE id=$id";


    if ($connection->query($sql) === TRUE) {
        header("Location: index.php");
    } 
    
    else {
     echo "Couldn't Delete: " . $connection->error;
    }
?>
