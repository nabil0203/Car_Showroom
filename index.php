<?php

include 'db.php';

?>



<!DOCTYPE html>
<html>
<head>
    <title>Car Showroom</title>
    <link rel="stylesheet" href="style.css">



</head>
<body>

<div class="container">
    <h2>🚗 Car Showroom</h2>
    <a href="add.php" class="btn">+ Add New Car</a>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Year</th>
                    <th>Price ($)</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
            <?php
                $result = $connection->query("SELECT * FROM car_details");
                
                while ($row = $result->fetch_assoc()) {

                    echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['brand']}</td>
                        <td>{$row['model']}</td>
                        <td>{$row['year']}</td>
                        <td>{$row['price']}</td>
                        <td>
                            <a href='edit.php?id={$row['id']}' class='btn'>Edit</a>
                            
                            <a href='delete.php?id={$row['id']}' class='btn' onclick=\"alert('This Car will be deleted from the list!');\">Delete</a>
                        </td>
                        
                    </tr>";
                }
            ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>


