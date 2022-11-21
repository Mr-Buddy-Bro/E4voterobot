<?php
include('database_conn.php');

        $fname = $_POST['f_name'];
        $lname = $_POST['l_name'];
        $email = $_POST['email'];
        $department = $_POST['department'];
        $class = $_POST['class'];
        $mobile = $_POST['mobile'];
        $message = $_POST['message'];
        $description = $_POST['description'];

        $sql = "UPDATE `candidate` SET `first name`='$fname', `last name`='$lname', `email`='$email' ,`department`='$department' , `class`='$class' , `mobile`='$mobile' , `message`='$message' , `description`='$description' WHERE email='$email'";

        if ($conn->query($sql) === TRUE) {
            // new recorde done...
            echo 'success';
            header("Location: cand_details_edit.php");

                //Check if image file is a actual image or fake image
                

        }else{
            //failed
            echo 'failed';
        }
    ?>