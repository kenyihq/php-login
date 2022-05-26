<?php

    $server = "localhost";
    $username = "root";
    $password = "holamund0";
    $database = "db_php_test";
    
    try {
        $conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);

    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }

?>