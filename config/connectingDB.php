<?php
    $servername = "localhost";
    $username = "root";
    $databaseName = "test";
    
    // Create connection
    $conn = new mysqli($servername, $username,"",$databaseName);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully";


?>