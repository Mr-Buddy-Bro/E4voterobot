<?php
include('database_conn.php');
// include('vote.php');

	$filter = $_POST['filter'];
	$sql = "SELECT * FROM candidate WHERE role=$filter";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   
?>