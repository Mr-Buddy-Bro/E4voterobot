<?php 
$full = FALSE;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administrator login</title>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@300;500;700&display=swap" rel="stylesheet"> 
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link type="text/javascript" rel="script" href="js/main.js"/>
</head>
<body>
	<!-- Header Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 bg-secondary d-none d-lg-block">
                <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 display-4 text-primary text-uppercase">E4vote</h1>
                </a>    
            </div>
            <div class="col-lg-9">
                <div class="row bg-white border-bottom d-none d-lg-flex">
                    <div class="col-lg-7 text-left">
                        <div class="h-100 d-inline-flex align-items-center py-2 px-3">
                            <i class="fa fa-envelope text-primary mr-2"></i>
                            <small>E4votehelper@example.com</small>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                            <i class="fa fa-phone-alt text-primary mr-2"></i>
                            <small>+91 7306439890</small>
                        </div>
                    </div>
                    <div class="col-lg-5 text-right">
                        <div class="d-inline-flex align-items-center p-2">
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="https://www.facebook.com/profile.php?id=100084697125351">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="www.twitter.com">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="www.linkedin.com">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="https://www.instagram.com/e_4vote?r=nametag">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="https://www.youtube.com/channel/UCWTtJbhEb6F-Fc6f3Mm8xQA">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                    <a href="index.html" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary text-uppercase">E-4vote</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.html" class="nav-item nav-link active">Home</a>
                            <a href="about.html" class="nav-item nav-link">About</a>
                            <a href="service.html" class="nav-item nav-link">Vote</a>
                            <a href="team.html" class="nav-item nav-link">Results</a>
                            <a href="candidate_login.php" class="nav-item nav-link">Candidate login</a>
                            <a href="administrator_login.php" class="nav-item nav-link">Administrator login</a>
                            <a href="contact.html" class="nav-item nav-link">Contact</a>
                        </div>
                        <a href="rules.html" class="btn btn-primary mr-3 d-none d-lg-block">General rules</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->


	<!-- login form -->
	 <!-- Appointment Start -->
	 <form method="GET" action="">
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-appointment rounded">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-6 py-5">
                        <div class="rounded p-5 my-5" style="background: rgba(55, 55, 63, .7);">
                            <h1 class="text-center text-white mb-4">Administrator SignUp</h1>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" name="name" placeholder="Your Name" required="required" />
                                </div>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" style="height: 47px;" name="gender">
                                        <option selected>Gender</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                        <option value="3">Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" name="college_name" placeholder="Collage name" required="required" />
                                </div>
                                <div class="form-row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="date" id="date" data-target-input="nearest">
                                                <input type="text" class="form-control border-0 p-4 datetimepicker-input" placeholder="Department" name="department" data-target="#date" data-toggle="datetimepicker"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="time" id="time" data-target-input="nearest">
                                                <input type="text" class="form-control border-0 p-4 datetimepicker-input" placeholder="Position" name="position" data-target="#time" data-toggle="datetimepicker"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="phone" name="mobile" class="form-control border-0 p-4" placeholder="Mobile" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 p-4" name="email" placeholder="Email" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" name="election_name" placeholder="Election name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control border-0 p-4" name="date" placeholder="Date" required="required" />
                                    <center><p>Election Conduct date.....!</p></center>
                                </div>
                               
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" name="pass" placeholder="Create password" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" name="re_pass" placeholder="Confirm password" required="required" />
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block border-0 py-3" type="submit">Register</button>
                                </div>
                                <p style="text-align: center; margin-top: 20px;">Already have an account?<a href="administrator_login.php">Log In</a></p>
                                <center><p id="warning_text" style="visibility: hidden;">Maximum number of Admins reached!</p></center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    <!-- Appointment End -->

      <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white pt-5 px-sm-3 px-md-5" style="margin-top: 90px;">
        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                    <i class="fa fa-2x fa-map-marker-alt text-primary"></i>
                    <div class="ml-3">
                        <h5 class="text-white">Our Office</h5>
                        <p class="m-0">123 Carnivel Building , Angamly, Ernakulam</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                    <i class="fa fa-2x fa-envelope-open text-primary"></i>
                    <div class="ml-3">
                        <h5 class="text-white">Email Us</h5>
                        <p class="m-0">E4votehelper@example.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                    <i class="fa fa-2x fa-phone-alt text-primary"></i>
                    <div class="ml-3">
                        <h5 class="text-white">Call Us</h5>
                        <p class="m-0">+91 7306439890</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 mt-n2 display-4 text-primary text-uppercase">E4vote</h1>
                </a>
                <p>Let's Choose Best leader's</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Popular Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Attorney</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>FAQs</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Help</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Terms</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Privacy</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Site Map</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Newsletter</h4>
                <p>Online voting system ,which have admin privilge to customize all. </p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-0" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-4 mt-5 mx-0" style="background: rgba(256, 256, 256, .05);">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a class="font-weight-bold" href="#">Evote</a>. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <p class="m-0 text-white">Designed by <a class="font-weight-bold" href="https://htmlcodex.com">Evote Codex</a></p>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- php -->
    <?php 
        if (isset($_GET['name']) && isset($_GET['gender']) && isset($_GET['college_name']) && isset($_GET['department']) && isset($_GET['position']) && isset($_GET['mobile'])) {
            // code...

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

        $curDate = date("Y-m-d");
        $validDate = FALSE;

        if($date < $curDate){
            echo '<script>alert("Invalid date!")</script>';
        }else{
            $validDate = TRUE;
        }
        if($pass== $repass)
        {

        if($validDate){
        $sql = "SELECT * FROM administrator";
        $result = $conn->query($sql);

        if ($result->num_rows > 2) {
          //admin full
           echo '<script>alert("Maximum admins already exist!")</script>';
        
        } else {
          //insert

        $sql = "INSERT INTO `administrator` (`id`, `name`, `gender`, `collage name`, `department`, `position`, `mobile`, `email`, `password`, `election name`, `_date`) VALUES (NULL, '$name', '$gender', '$college_name', '$department', '$position', '$mobile', '$email', '$pass', '$election_name', '$date')";

        if ($conn->query($sql) === TRUE) {
            // new recorde done...
            
        }else{
            //failed
        }

        }

    }
    }
}
    ?>
</body>
</html>