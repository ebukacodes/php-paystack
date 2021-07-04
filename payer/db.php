<?php
$host = "localhost";
$username = "root";
$password ="";
$dbname = "payer";

//Set the data source
$dsn = "mysql:host=".$host.";dbname=".$dbname;

//Creating the pdo instance
$pdo = new PDO($dsn, $username, $password);

// Turn off error reporting
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Set to object
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
?>
