<?php
ob_start(); //Turns on output buffering 
session_start();

date_default_timezone_set("America/New_York");

try {
    $con = new PDO("mysql:dbname=heroku_e7268af48fdbee0;host=us-cdbr-east-03.cleardb.com", "bf20c28b62e85b", "23b244e6");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>