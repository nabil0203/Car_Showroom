<?php

include 'db.php';

?>



<!DOCTYPE html>
<html>
<head>
    <title>Add Car</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>➕ Add New Car</h2>
    <form method="POST">
        <label>Brand</label>
        <input type="text" name="brand" required>

        <label>Model</label>
        <input type="text" name="model" required>

        <label>Year</label>
        <input type="number" name="year" required>

        <label>Price ($)</label>
        <input type="number" step="0.01" name="price" required>

        <button type="submit" name="submit">Add Car</button>
        <a href="index.php" class="back-btn">⬅ Back</a>
    </form>
</div>

</body>
</html>





<?php
if (isset($_POST['submit'])) {

    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $price = $_POST['price'];

    $sql = "INSERT INTO cars (brand, model, year, price) VALUES ('$brand', '$model', '$year', '$price')";
    if ($connection->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $connection->error;
    }
}
?>