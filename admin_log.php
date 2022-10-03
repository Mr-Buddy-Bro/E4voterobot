<?php 

require 'database_conn.php';
require 'administrator_login.php';

$email = $_GET['email'];
$password = $_GET['pass'];

$sql = "SELECT email,password FROM `administrator` WHERE email='example@gmail.com'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
    $row = $result->fetch_assoc();
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["email"]. " - Name: " . $row["password"]. "<br>";
  }
  if($row["password"] == $password){
        echo "Athentication sucessfull";
        header("Location:admin_cpanel.php");
      }else{
        echo "Authentication failed";
      }
  
} else {
  echo "No records found";
}

 ?>