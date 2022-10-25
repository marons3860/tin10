<?php
header('Content-Type: text/html; charset=UTF-8');
$servername = "localhost";
$username = "marons";
$password = "mar##505tcdbd";
$dbname = "marons";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//mysqli_query($conn,"set names utf8"); 
//mysqli_set_charset($conn, "utf8" );

//mysqli_query($conn, "set session character_set_connection=utf8;");

//mysqli_query($conn, "set session character_set_results=utf8;");

//mysqli_query($conn, "set session character_set_client=utf8;");
echo "Connected successfully";
?> 