<!DOCTYPE html>
<html lang="en">

<!--Meta content in head-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
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
require('./main/header.php');
?>

<body>
    <div class="home-container container-fluid justify-content-center">
        <h1 class="text-white">Welcome!</h1>
        <p class="text-white">Please sign up or log in.</p>
        <div class="button-container">
            <button class="btn btn-primary btn-outline-light btn-light"><a href="register.php">Register</a></button>
            <button class="btn btn-primary btn-outline-light btn-light"><a href="login.php">Login</a></button>
        </div>
</body>
</div>

<?php
require('./main/footer.php');
?>

</html>