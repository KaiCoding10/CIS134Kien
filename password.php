<?php
// Define an array of 10 passwords, 5 good and 5 bad
$passwords = [
    // Good passwords
    "StrongPass1!",      // Meets all criteria
    "SeCure$123456",     // Meets all criteria
    "Safe@Password12",   // Meets all criteria
    "Val!dPa55word123",  // Meets all criteria
    "Good#Pa$2word456",  // Meets all criteria

    // Bad passwords
    "short",             // Too short
    "NoSpecialChar1",    // Missing non-alphanumeric character
    "NoNumber!",         // Missing a number
    " allspaces1!",      // Contains a space
    "nocapital12!"       // Missing uppercase letter
];

// Function to validate a password
function checkPassword($password) {
    // Check if the password has at least 12 characters
    if (strlen($password) < 12) {
        return "$password: Password must be at least 12 characters long.";
    }

    // Check if the password contains at least one number
    if (!preg_match('/\d/', $password)) {
        return "$password: Password must contain at least one number.";
    }

    // Check if the password contains at least one lowercase letter
    if (!preg_match('/[a-z]/', $password)) {
        return "$password: Password must contain at least one lowercase letter.";
    }

    // Check if the password contains at least one uppercase letter
    if (!preg_match('/[A-Z]/', $password)) {
        return "$password: Password must contain at least one uppercase letter.";
    }

    // Check if the password contains at least one non-alphanumeric character
    if (!preg_match('/[\W_]/', $password)) {
        return "$password: Password must contain at least one special character.";
    }

    // Check if the password contains any spaces
    if (preg_match('/\s/', $password)) {
        return "$password: Password must not contain spaces.";
    }

    // If all checks pass, return true
    return true;
}
// Main logic to process each password
foreach ($passwords as $password) {
    $result = checkPassword($password); // Call the validation function
    if ($result === true) {
        // Password is good
        echo "$password: Valid password. It is a GOOD password!\n";
    } else {
        // Password is bad; display the reason
        echo "$result\n";
    }
}
?>