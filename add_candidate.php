<?php
include('database_conn.php');

        $fname = $_POST['f_name'];
        $lname = $_POST['l_name'];
        $photo = '';
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $department = $_POST['department'];
        $class = $_POST['class'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $y_o_a = $_POST['y_o_a'];
        $message = $_POST['message'];
        $description = $_POST['description'];
        $pass = $_POST['password'];
        $repass = $_POST['repassword'];
        $role = $_POST['role'];

        if(isset($_FILES['photo'])) {

                  $img_name = $_FILES['photo']['name'];
                  $img_size = $_FILES['photo']['size'];
                  $tmp_name = $_FILES['photo']['tmp_name'];
                  $error = $_FILES['photo']['error'];
                  echo 'success';

                  if ($error === 0) {

                    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                    $img_ex_lc = strtolower($img_ex);
                    $new_img_name = uniqid('IMG-', TRUE).'.'.$img_ex_lc;
                    $photo = $new_img_name;

                    $img_upload_path = 'img/'.$new_img_name;
                    move_uploaded_file($tmp_name, $img_upload_path); 

                    echo "done";
                  }else{
                    echo "failed";
                  }
                  
                }else{
                  echo ' 1 failed';
                }



        if($pass == $repass)
        {

        $sql = "INSERT INTO `candidate` (`id`, `first name`, `last name`, `photo url`, `age`, `gender`, `department`, `class`, `email`, `mobile`, `year of admission`, `message`, `description`, `password`, `role`) VALUES (NULL, '$fname', '$lname', '$photo', '$age', '$gender', '$department', '$class', '$email', '$mobile', '$y_o_a', '$message', '$description', '$pass', '$role')";

        if ($conn->query($sql) === TRUE) {
            // new recorde done...
            echo 'success';
            header("Location: candidate_details.php");

                //Check if image file is a actual image or fake image
                

        }else{
            //failed
        }
}
    ?>