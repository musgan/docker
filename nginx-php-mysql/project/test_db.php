<?php
    $servername = "tutorial_db_mysql";
    $username = "root";
    $password = "12345";

    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // var_dump($conn);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
?>