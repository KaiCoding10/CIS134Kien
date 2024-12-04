<link rel="stylesheet" href="CSS/sharedStyle.css">
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
    <tr>
        <td><?php echo $servicesArray[0][0]?></td>
        <td><?php echo $servicesArray[0][1]?></td>
        <td> <?php echo $servicesArray[0][2]?></td>
        <td><?php echo $servicesArray[0][3]?></td>
    </tr>
    <tr>
        <td><?php echo $servicesArray[1][0]?></td>
        <td><?php echo $servicesArray[1][1]?></td>
        <td> <?php echo $servicesArray[1][2]?></td>
        <td><?php echo $servicesArray[1][3]?></td>
    </tr>
    <tr>
        <td><?php echo $servicesArray[2][0]?></td>
        <td><?php echo $servicesArray[2][1]?></td>
        <td> <?php echo $servicesArray[2][2]?></td>
        <td><?php echo $servicesArray[2][3]?></td>
    </tr>
    <tr>
        <td><?php echo $servicesArray[3][0]?></td>
        <td><?php echo $servicesArray[3][1]?></td>
        <td> <?php echo $servicesArray[3][2]?></td>
        <td><?php echo $servicesArray[3][3]?></td>
    </tr>
    <tr>
        <td><?php echo $servicesArray[3][0]?></td>
        <td><?php echo $servicesArray[3][1]?></td>
        <td> <?php echo $servicesArray[3][2]?></td>
        <td><?php echo $servicesArray[3][3]?></td>
    </tr>
    </tbody>
</table>
<br>

<?php
// Create an array to store the navigation captions
$navCaptions = ["Home", "About Us", "Our Services", "Contact Us"];
// Create another array named $navLinks that contain the URL information for the links
$navLinks = ["index.php", "about.php", "services.php", "contact.php"];
echo "<nav>";
echo "<a href='$navLinks[0]'>";
echo "$navCaptions[0]";
echo "</a>";
echo "<a href='$navLinks[1]'>";
echo "$navCaptions[1]";
echo "</a>";
echo "<a href='$navLinks[2]'>";
echo "$navCaptions[2]";
echo "</a>";
echo "<a href='$navLinks[3]'>";
echo "$navCaptions[3]";
echo "</a>";
echo "</nav>"
?>
