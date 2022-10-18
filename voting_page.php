<?php 

$result = $_GET['result'];

if (isset($result)) {

	$t_email_pos = strpos($result, "Email.");
	$t_email = substr($result, $t_email_pos);
	$email_pos = strpos($t_email, ".");
	$email = strtolower(substr($t_email, $email_pos+1));

	echo $email;

	mail($email,"Verify to Vote","Please verify your ID to continue voting");
}


?>