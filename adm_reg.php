<?php 
include('database_conn.php');
$name = $_GET['name'];
$gender = $_GET['gender'];
$college_name = $_GET['college_name'];
$department = $_GET['department'];
$position = $_GET['position'];
$mobile = $_GET['mobile'];
$email = $_GET['email'];
$election_name = $_GET['election_name'];
$pass = $_GET['pass'];
$repass = $_GET['re_pass'];
$date = $_GET['date'];
$sql = "SELECT * FROM administrator";
$result = $conn->query($sql);
if ($result->num_rows > 4) {
   "Admin Already exist";
   header("Location : http://localhost/e4votecoding/administrator_reg.html");
} else {
$sql = "INSERT INTO `administrator` (`id`, `name`, `gender`, `collage name`, `department`, `position`, `mobile`, `email`, `password`, `election name`, `_date`) VALUES (NULL, '$name', '$gender', '$college_name', '$department', '$position', '$mobile', '$email', '$pass', '$election_name', '$date')";
if ($conn->query($sql) === TRUE) {
	// code...
	echo "New record created";
}else{
	echo "Error : ".$sql."<br>".$conn->error;
}
}
 ?>