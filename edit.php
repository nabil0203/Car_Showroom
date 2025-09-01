<?php

include 'db.php';

$id = $_GET['id'];

// fetch car
$car = $connection->query("SELECT * FROM car_details WHERE id=$id")->fetch_assoc();



if (isset($_POST['update'])) {

     // catching from the post method
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $price = $_POST['price'];


    // update into db
    $sql = "UPDATE car_details SET brand='$brand', model='$model', year='$year', price='$price' WHERE id=$id";
    
    
    if ($connection->query($sql) === TRUE) {
        header("Location: index.php");
        exit;
    }
    
    
    else {
        echo "Error: " . $connection->error;
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Car Details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
    <h2>✏️ Edit Car Details</h2>
    <form method="POST">
        <label>Brand:</label>
        <input type="text" name="brand" value="<?php echo $car['brand']; ?>">

        <label>Model:</label>
        <input type="text" name="model" value="<?php echo $car['model']; ?>">

        <label>Year:</label>
        <input type="number" name="year" value="<?php echo $car['year']; ?>">

        <label>Price ($):</label>
        <input type="number" name="price" value="<?php echo $car['price']; ?>">

        <input type="submit" name="update" class="btn" value="Update Car">
    </form>
</div>
    
</body>
</html>
