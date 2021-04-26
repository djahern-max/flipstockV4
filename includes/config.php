<?php
ob_start(); //Turns on output buffering 
session_start();

date_default_timezone_set("America/New_York");

try {
    $con = new PDO("mysql:dbname=flipstock;host=localhost:3307", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>