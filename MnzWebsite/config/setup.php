<?php

require_once 'database.php';

    try {
        $conn = new PDO("mysql:host=localhost", $DB_USER, $DB_PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE DATABASE if NOT EXISTS db_MnzWebsite";
        $conn->exec($sql);
        echo "SETUP PROCESS<br> <br>";
        echo "1. Database created successfully<br>";
        $conn = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "2. Connection to database succeeded<br>";       
        
        $conn = null;
    }
    catch(PDOException $e){
        echo $sql . "<br> " . $e->getMessage();
    }
?>
