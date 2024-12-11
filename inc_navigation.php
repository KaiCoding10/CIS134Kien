<?php
// Create an array to store the navigation captions
$navCaptions = ["Home", "About Us", "Our Services", "Contact Us"];

// Create another array named $navLinks that contains the URL information for the links
$navLinks = ["index.php", "about.php", "services.php", "contact.php"];

echo "<nav>";
// Use a foreach loop for array processing
foreach ($navCaptions as $index => $caption) {
    echo "<a href='" . $navLinks[$index] . "'>";
    echo $caption;
    echo "</a>";
}
echo "</nav>";
?>


