<?php

    $server = "b36esvfuaqgj4waup2xa-mysql.services.clever-cloud.com";
    $username = "uyzj6dwdvelbkxwm";
    $password = "CMX6KO3eLaH3K7tQD171";
    $database = "b36esvfuaqgj4waup2xa";
    
    try {
        $conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);

    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }

?>