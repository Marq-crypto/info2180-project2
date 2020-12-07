<?php
    $host = 'localhost';
    $dbname = 'userdb';
    $username = 'info2180';
    $password = 'project2';

  
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //$conn = null;
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}  

?> 