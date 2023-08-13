<!DOCTYPE html>
<html lang="en">

<!--Meta content in head-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <meta name="description" content="Final Project">
    <meta name="author" content="Talique Capron">
    <meta name="robots" content="noindex, nofollow">
    <!--Link to CSS-->
    <link rel="stylesheet" href="./css/style.css">
    <!--Link to Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--Link to Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,400;6..12,700&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>

<?php
require('./main/header.php')
?>

<body>
    <!--Form container-->
    <div class="form-container">
        <h1 class="text-white">Register</h1>
        <form method="POST" action="crud/create.php" class="container-fluid justify-content-center">
            <!--Form inputs-->
            <div class="form-floating">
                <input type="text" name="full_name" placeholder="Full Name" class="form-control" required>
                <label for="full_name">Full Name</label>
            </div>
            <br>
            <div class="form-floating">
                <input type="text" name="username" placeholder="Username" class="form-control" required>
                <label for="username">Username</label>
            </div>
            <br>
            <div class="form-floating">
                <input type="email" name="email" placeholder="Email" class="form-control" required>
                <label for="email">Email</label>
            </div>
            <br>
            <div class="form-floating">
                <input type="tel" name="phone_number" placeholder="Phone Number" class="form-control" required>
                <label for="phone_number">Phone Number</label>
            </div>
            <br>
            <div class="form-floating">
                <input type="number" name="age" placeholder="Age" class="form-control" required>
                <label for="age">Age</label>
            </div>
            <br>
            <div class="form-floating">
                <input type="password" name="pass" placeholder="Password" class="form-control" required>
                <label for="pass">Password</label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-outline-dark btn-light">Create Account</button>
        </form>
    </div>
</body>

<?php
require('./main/footer.php')
?>