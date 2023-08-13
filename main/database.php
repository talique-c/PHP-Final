<?php
class Database {
    // Declare and initialize database variables
    private $username = 'Talique200535876';
    private $password = 'bx631FMhMx';
    private $hostname = '172.31.22.43';
    private $dbName = 'Talique200535876';
    private $connection;

    // Function to create the connection to the database
    function dbConnection() {
        // If there's not a connection then make one using the variables
        if (!isset($this->connection)) { 
            $this->connection = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbName);
            // If it's not the current connection / another connections how an error
            if (!$this->connection){
                echo '<p>Error! Cannot connect to the database!</p> ' . mysqli_connect_errno();
            }
        }
    return $this->connection;
    }
}
?>
