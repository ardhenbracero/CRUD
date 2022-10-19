<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";

// connect to MySQL Database
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// echo "Connected successfully";

?>
