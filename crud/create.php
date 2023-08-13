<?php
// Requires the necessary files
require_once('../main/database.php');
require_once('../main/validation.php');

// Creates a new Database object and creates a variable for the connection
$connection = new Database();
$conn = $connection->dbConnection();

// If the request method == POST then save values as variables
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $age = $_POST['age'];
    // Hashes the password before saving in password variable
    $password = hash('sha512', $_POST['pass']);

    // Validation functions
    $nameValidation = validateName($full_name);
    $usernameValidation = validateUsername($username);
    $emailValidation = validateEmail($email);
    $phoneValidation = validatePhonenumber($phone_number);
    $ageValidation = validateAge($age);

    // Checks for validation and and assigns errors
    if (!$nameValidation) {
        echo "Error: Your name is too long.";
    } else if (!$usernameValidation) {
        echo "Error: Your username is too long.";
    } else if (!$emailValidation) {
        echo "Error: Please enter a valid email address. (Example: johndoe@xyzemail.com)";
    } else if (!$phoneValidation) {
        echo "Error: Please enter a valid phone number.";
    } else if (!$ageValidation) {
        echo "Error: Please enter a valid age.";
    }

    // Adds a new user to the database
    $registerQuery = "INSERT INTO users (full_name, username, email, phone_number, age, password)
                              VALUES ('$full_name', '$username', '$email', '$phone_number', '$age', '$password')";

    // This performs a query by taking 2 parameters - the connection and a string of the query
    if (!mysqli_query($conn, $registerQuery)) {
        echo "Uh oh, registration unsuccessful. Please try again. " . mysqli_error($conn);
    } else {
        //Go to register success page
        header('Location: ../register_success.php');
    }
}
?>