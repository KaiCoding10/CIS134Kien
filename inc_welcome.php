<?php
// 1. Create a variable named isLogin and initialize it with a false value.
$isLogin = true;

// 2. Create a variable named username and initialize it with a null value.
$username = null;

// 3. Using an if statement, check the isLogin value
if ($isLogin) {
    // If isLogin is true, display a welcome message along with the username
    echo "Welcome, " . $username . "!";
} else {
    // Otherwise, send a message indicating the user needs to log in
    echo "You need to log in to access this page.";
}
?>
