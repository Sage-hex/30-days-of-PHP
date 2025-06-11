<?php
// params to connect to the database
$dbHost = "localhost"; // Database host
$dbUser = "root"; // Database user
$dbPass = ""; // Database password, here it is empty for local development     
$dbName = "phptutorial"; // Database name

// connection to database        
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName); // Create a connection to the database, here i in the mysqli stands for MySQLi which is an improved version of the original MySQL extension in PHP

if (!$conn){
    die('Database connection failed!');  

}
?>