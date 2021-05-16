<?php
ob_start(); //Turns on output buffering 
session_start();

date_default_timezone_set("America/New_York");

// try {
 
//     //Get Heroku ClearDB connection information
//     $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
//     $cleardb_server = $cleardb_url["host"];
//     $cleardb_username = $cleardb_url["user"];
//     $cleardb_password = $cleardb_url["pass"];
//     $cleardb_db = substr($cleardb_url["path"],1);
//     $active_group = 'default';
//     $query_builder = TRUE;
//     // Connect to DB
//     $con = new PDO("mysql:dbname=heroku_e7268af48fdbee0;host=us-cdbr-east-03.cleardb.com", "bf20c28b62e85b", "23b244e6");
//     $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

// }
// catch (PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["us-cdbr-east-03.cleardb.com"];
$username = $url["bf20c28b62e85b"];
$password = $url["23b244e6"];
$db = substr($url["mysql://bf20c28b62e85b:23b244e6@us-cdbr-east-03.cleardb.com/heroku_e7268af48fdbee0?reconnect=true"], 1);

$conn = new mysqli($server, $username, $password, $db)

?>