<?php 
include('database_conn.php');


$result = $_GET['result'];

if (isset($result)) {

	$t_email_pos = strpos($result, "Email.");
	$t_email = substr($result, $t_email_pos);
	$email_pos = strpos($t_email, ".");
	$email = strtolower(substr($t_email, $email_pos+1));

	echo $email;

	$sql = "SELECT * FROM voter WHERE email='$email'";
	$result = $conn->query($sql);

	$row = $result->fetch_assoc();

	if ($row > 0) {
		echo " voter exist";
		header("Location: ./vote.php?email=".$email);
	}
	else{
		echo " Voter not exist";
		$sql = "INSERT INTO `voter`(`email`, `v_chairman`, `v_vice_chairman`, `v_secretary`, `v_joint_secretary`, `v_councilor`, `v_seretary_fine_arts_club`, `v_magazine_editor`, `v_general_captain`, `v_II_dc_representative`, `v_III_dc_representative`, `v_pg_dc_representative`) VALUES ('$email',0,0,0,0,0,0,0,0,0,0,0)";

        if ($conn->query($sql) === TRUE) {
            // new recorde done...
            echo 'success';
            header("Location: ./vote.php?email=".$email);

                //Check if image file is a actual image or fake image
                

        }else{
            //failed
            echo " record not created";
        }

	}

    

	// mail($email,"Verify to Vote","Please verify your ID to continue voting");

}


?>