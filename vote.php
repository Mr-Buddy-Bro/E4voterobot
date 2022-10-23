<?php

    $filter = $_GET['filter'];
    include('database_conn.php');

    if (!isset($_GET['filter'])) {
        $sql = "SELECT * FROM candidate WHERE role=1 ";
    }
    else{
        $sql = "SELECT * FROM candidate WHERE role=$filter";
    }
    $result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>E4vote -  online election center for election</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

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

</head>

<body>
    <!-- Header Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 bg-secondary d-none d-lg-block">
                <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 display-4 text-primary text-uppercase">E-4vote</h1>
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
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="www.instagram.com">
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
                            <a href="index.html" class="nav-item nav-link">Home</a>
                            <a href="about.html" class="nav-item nav-link">About</a>
                            <a href="service.html" class="nav-item nav-link active">Vote</a>
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

    <div class="cen_content">
        <h1>Candidates</h1>

        <br>
        <select onchange="onfilter()" id="filter" name="filter" style="border: 2px solid #8f7528;padding: 10px; border-radius: 20px;">
            <option value="-1">--Choose--</option>
            <option value="1">CHAIRMAN</option>
            <option value="2">VICE CHAIRMAN</option>
            <option value="3">SECRETARY</option>
            <option value="4">JOINT SECREATARY</option>
            <option value="5">COUNCILOR</option>
            <option value="6">SERETARY FINE ARTS CLUB</option>
            <option value="7">MAGAZINE EDITOR</option>
            <option value="8">GENERAL CAPTAIN</option>
            <option value="9">II DC REPRESENTATIVE</option>
            <option value="10">III DC REPRESENTATIVE</option>
            <option value="11">PG REPRESENTATIVE</option>
        </select>

       
        <div style="display: block;justify-content: center; margin: 50px 0;">
            
        <?php
            if ($result->num_rows > 0) {
              // output data of each row
                $i = 1;
              while($row = $result->fetch_assoc()) {
                
                $id = $row["id"];
                $fname = $row["first name"];
                $lname = $row["last name"];
                $photo_url = $row["photo url"];
                $age = $row["age"];
                $department = $row["department"];
                $class = $row["class"];
                $email = $row["email"];
                $mobile = $row["mobile"];
                $year_of_adm = $row["year of admission"];
                $msg = $row["message"];
                $description = $row["description"];
                 echo "<div class='card' style='width: 18rem; display: inline-block;'>
                      <img src='img/".$photo_url."' width='100%' class='card-img-top' alt='...'>
                      <div class='card-body'>
                        <h5 class='card-title'>".$fname." ".$lname."</h5>
                        <p class='card-text'>".$description."</p>
                        <a href='cand_details_edit.php?id=".$id."' class='btn btn-primary'>Details</a>
                      </div>
                    </div>";
                    if ($i==4) {
                    echo "<br><br>";
                    $i = 0;
                    }
                    $i = $i+1;
            }
            } else {
              echo "0 results";
            }
        ?>
        </div>
        
    </div>
     
    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white pt-5 px-sm-3 px-md-5" style="margin-top: 90px;">
        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                    <i class="fa fa-2x fa-map-marker-alt text-primary"></i>
                    <div class="ml-3">
                        <h5 class="text-white">Our Office</h5>
                        <p class="m-0">123 Carnivel Building , Angamaly, Ernakulam</p>
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
                    <h1 class="m-0 mt-n2 display-4 text-primary text-uppercase">E-4vote</h1>
                </a>
                <p>Let's Choose Best leader's</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://twitter.com/e_4vote?t=d_StMwhWQIcyE4raaI3HPA&s=08"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://www.facebook.com/profile.php?id=100084697125351"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="www.linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square" href="https://www.instagram.com/e_4vote?r=nametag"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Popular Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="about.html"><i class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-white mb-2" href="service.html"><i class="fa fa-angle-right mr-2"></i>Vote</a>
                    <a class="text-white mb-2" href="team.html"><i class="fa fa-angle-right mr-2"></i>Results</a>
                    <a class="text-white" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>FAQs</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Help</a>
                    <a class="text-white mb-2" href="rules.html"><i class="fa fa-angle-right mr-2"></i>Terms</a>
                    <a class="text-white mb-2" href="rules.html"><i class="fa fa-angle-right mr-2"></i>Privacy</a>
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
                <p class="m-0 text-white">&copy; <a class="font-weight-bold" href="#">E-vote</a>. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <p class="m-0 text-white">Designed by <a class="font-weight-bold" href="https://htmlcodex.com">Evote Codex</a></p>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script type="text/javascript">
    let popup = document.getElementById('popup');

    function on_add_candidate(){

        popup.style.visibility = "visible";
    }
    function onfilter(){
        let filt = document.getElementById("filter").value;
        window.location.assign("./vote.php?filter="+filt);
    }
    function on_save(){
        let f_name = document.getElementById('f_name').value;
        let l_name = document.getElementById('l_name').value;
        let photo = document.getElementById('photo').value;
        let age = document.getElementById('age').value;
        let gender = document.getElementById('gender').value;
        let department = document.getElementById('department').value;
        let _class = document.getElementById('class').value;
        let email = document.getElementById('email').value;
        let mobile = document.getElementById('mobile').value;
        let y_o_a = document.getElementById('y_o_a').value;
        let role = document.getElementById('role').value;
        let message = document.getElementById('message').value;
        let description = document.getElementById('description').value;
        let password = document.getElementById('password').value;
        let repassword = document.getElementById('repassword').value;
        let agree = document.getElementById('agree').value;

        // let e_name = "hi";

        // $.ajax({
        //     type: "POST",
        //     url: "add_candidate.php",
        //     data: {'f_name' : f_name, 'l_name' : l_name,'photo' : photo,'age' : age,'department' : department,'class' : _class,'email' : email,'mobile' : mobile,'y_o_a' : y_o_a,'message' : message,'description' : description,'gender' : gender,'password' : password,'repassword' : repassword,'agree' : agree, 'role':role},
        //     success: function(){
        //         // window.location.reload();
        //     }
        // });

        popup.style.visibility = "hidden";
    }
    function btn_close_pop(){
        popup.style.visibility = "hidden";
    }

</script>
<!--php to ddisplay-->

</body>

</html>