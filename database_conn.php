<?php  
$servername = "	sql307.ezyro.com";
$username = "ezyro_32816605";
$password = "xhmem6h4nbm2";
$dbname="ezyro_32816605_e4vote";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>