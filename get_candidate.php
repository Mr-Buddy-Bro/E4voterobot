<?php
include('database_conn.php');

$filter = $_POST['filter'];

if ($filter == "1") {
	$sql = "SELECT * FROM candidate";
}else{
	$sql = "SELECT * FROM candidate WHERE role='$filter'";
}
   $result = $conn->query($sql);
   return $result;
?>