<?php
// Initialize global variable
$isLogin = false;

// Function to search the password file
function searchPasswordFile($username, $password) {
    global $isLogin;
    $file = fopen("password.txt", "r");

    if ($file) {
        while (($line = fgets($file)) !== false) {
            $storedUsername = trim($line);
            $storedPassword = trim(fgets($file)); // Read the next line for the password

            if ($storedUsername === $username && $storedPassword === $password) {
                $isLogin = true;
                break;
            }
        }
        fclose($file);
    }
}

// Form handling logic
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"] ?? "");
    $password = trim($_POST["password"] ?? "");

    if (!empty($username) && !empty($password)) {
        searchPasswordFile($username, $password);

        if ($isLogin) {
            echo "Login successful!";
        } else {
            echo "Invalid username or password.";
        }
    } else {
        echo "Username and password are required.";
    }
}

if (isset($_POST["create"])) {
    $username = trim($_POST["username"] ?? "");
    $password = trim($_POST["password"] ?? "");

    if (!empty($username) && !empty($password)) {
        $file = fopen("password.txt", "a");
        fwrite($file, "$username\n$password\n");
        fclose($file);
        echo "New login created successfully.";
    } else {
        echo "Username and password are required to create a login.";
    }
}

?>
