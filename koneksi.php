<?php
date_default_timezone_set('asia/jakarta');

$servername = "localhost";
$username = "root";
$password = "";
$db = "webdailyjurnal";

$conn = new mysqli( $servername, $username, $password, $db);

if($conn->connect_error) {
    die("connection failed : ".$conn->connect_error );
}

//echo "connection successfully<hr>";
?>