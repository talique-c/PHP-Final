<?php
// Require necessary files
require_once('../main/database.php');
require_once('create.php');

// If the ID is set
if (isset($_POST['ID'])) {
    $ID = $_POST['ID'];
    
    // Query to delete a row where the ID matches
    $deleteQuery = "DELETE FROM users WHERE ID = $ID";
    
    // Deletes record when the query is executed
    if (mysqli_query($conn, $deleteQuery)) {
        echo "The record has been deleted.";
    } else {
        echo "Error: Record could not be deleted.";
    }
}

?>