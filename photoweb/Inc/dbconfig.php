<?php 
    $host = "localhost";
    $username = "root";
    $password = "root";
    $database = "photoweb";

    $conn = new mysqli($host, $username, $password, $database);

    if (mysqli_connect_errno()){
        die("Failed to Connect to the database: ". mysqli_connect_error());
    }
    
?>