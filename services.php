<link rel="stylesheet" href="CSS/sharedStyle.css">
<?php require "inc_welcome.php"?>
<?php include "inc_navigation.php" ?>
<?php
echo "<h1>My Services</h1>";
$servicesArray = [
    ["Web App", 1000, 7, "Yes"],
    ["Web App", 800, 5, "No"],
    ["Mobile App", 900, 7, "Yes"],
    ["Mobile App", 700, 7, "No"],
    ["Windows App", 1500, 7, "Yes"],
]
?>
<!-- Create a 4-column HTML table -->
<table>
    <thead>
    <tr>
        <th>Product</th>
        <th>Price</th>
        <th>Development time</th>
        <th>Database</th>
    </tr>
    </thead>
    <tbody>
    <?php
    // Use foreach loop to iterate through $servicesArray
    foreach ($servicesArray as $service) {
        echo "<tr>";
        // use another loop to loop from each array element of the $servicesArray
        foreach ($service as $detail) {
            echo "<td>" . htmlspecialchars($detail) . "</td>";
        }
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
<?php include "inc_footer.php"?>
<br>


