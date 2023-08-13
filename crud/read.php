<?php
// Require all of the necessary files
require_once('../main/database.php');
require_once('../main/validation.php');
require_once('create.php');

// Query to get the ID from an existing user
$loginQuery = "SELECT ID FROM users WHERE username = '$username' AND password = '$password'";
// User login query
$userLogin = mysqli_query($conn, $loginQuery);

// If an ID has a row that matches the username and password
if (mysqli_num_rows($userLogin) == 1) {
    // Starts a session -> everything will be recorded
    session_start();
    // Store ID in the session variable (so it can remember the user)
    $_SESSION['ID'] = $username;
    // When logged in, go to the success page
    header('Location: ../login_success.php');
} else {
    echo "<p>Error: Please re-enter your username or password.</p>";
}
?>