<?php
// Initialize global variable
$isLogin = false;

// Function to read the password file into parallel arrays
function readPasswordFile() {
    $usernames = [];
    $passwords = [];

    $file = fopen("password.txt", "r");

    if ($file) {
        while (($line = fgets($file)) !== false) {
            $usernames[] = trim($line);          // Read username
            $passwords[] = trim(fgets($file));   // Read corresponding password
        }
        fclose($file);
    }

    return [$usernames, $passwords];
}

// Function to search for a matching username and password
function searchCredentials($username, $password, $usernames, $passwords) {
    global $isLogin;

    foreach ($usernames as $index => $storedUsername) {
        if ($storedUsername === $username && $passwords[$index] === $password) {
            $isLogin = true;
            break;
        }
    }
}

// Form handling logic
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"] ?? "");
    $password = trim($_POST["password"] ?? "");

    if (!empty($username) && !empty($password)) {
        // Read the file into arrays
        [$usernames, $passwords] = readPasswordFile();

        // Search for matching credentials
        searchCredentials($username, $password, $usernames, $passwords);

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
