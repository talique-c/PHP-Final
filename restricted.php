<!DOCTYPE html>
<html lang="en">

<!--Meta content in head-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Info</title>
    <meta name="description" content="Final Project">
    <meta name="author" content="Talique Capron">
    <meta name="robots" content="noindex, nofollow">
    <!--Link to CSS-->
    <link rel="stylesheet" href="./css/private.css">
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

<?php
session_start();
// Checks if the user has a current session by seeing if the ID is set
if (!isset($_SESSION['ID'])) {
    // If there isn't then go back to the login page
    header('Location: login.php');
}
?>

<!-- Users table -->
<table class="table table-striped table-sm">
    <thead class="thead-dark">
        <!-- Table headings -->
        <tr>
            <th class="col">ID</th>
            <th class="col">Username</th>
            <th class="col">Email</th>
            <th class="col">Age</th>
            <th class="col">Update / Delete</th>
        </tr>
    </thead>
    <tbody>
    <?php
    require_once('../main/database.php');
    require_once('../crud/create.php');
        // Selects data from the users table
        $table_query = "SELECT ID, username, email, age FROM users";
        // Stores the query in this variable
        $registered_users = mysqli_query($conn, $table_query);
        // While there are rows of data left to query, mySQL will take the rows from users
        while ($row = mysqli_fetch_assoc($registered_users)) {
            // The data that is taken is stored in rows in the table
            // <tr> is echoed so the table rows can keep repeating
            echo "<tr>";
            echo "<td>" . $row['ID'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "<td><a href='.crud/update.php?id={$row['ID']}'>Update</a></td>";
            echo "<td><a href='./crud/delete.php?id={$row['ID']}'>Delete</a></td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<?php
// Ends the session when the user leaves the page
session_destroy();
require('./main/footer.php')
?>