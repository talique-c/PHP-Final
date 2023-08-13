<?php
// Makes sure the name is not longer than 50 characters
function validateName($name) {
        if (strlen($name > 50)) {
            return false;
        } else {
            return true;
        }
}

// Makes sure the username is not longer than 30 characters
function validateUsername($username) {
    if (strlen($username > 50)) {
        return false;
    } else {
        return true;
    }
}

// Makes sure the email is valid
function validateEmail($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
        } else {
            return false;
        }
}

// Makes sure the phone number is made up of valid numbers
function validatePhonenumber($phone_number) {
    if(preg_match("/^\d{3}-?\d{3}-?\d{4}$/", $phone_number)) {
        return true;
    } else {
        return false;
    }
}

// Makes sure the age only contains numbers
function validateAge($age){
    if (preg_match("/^[0-9]+$/", $age)){
        return true;
    } else {
        return false;
    }
}
?>
