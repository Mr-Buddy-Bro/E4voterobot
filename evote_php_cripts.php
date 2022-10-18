<?php
	include('database_conn.php');

        $elec_name = $_POST['elec_name'];
        $con_date = $_POST['elec_con_date'];
        $sub_date = $_POST['elec_sub_date'];
        $desc = $_POST['elec_desc'];

        $curDate = date("Y-m-d");
        $validDate = FALSE;

        if($con_date < $curDate && $sub_date < $curDate){
            echo '<script>alert("Invalid date!")</script>';
        }else{
            $validDate = TRUE;
        }
        

        if($validDate || TRUE){

        $sql = "UPDATE `administrator` SET `election name` = '$elec_name', `_date` = '$con_date', `candidate due date` = '$sub_date', `description` = '$desc' WHERE id=1";

        if ($conn->query($sql) === TRUE) {
            // new recorde done...
       
            
        }else{
            //failed
      
        }
}	


?>