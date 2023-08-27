<!-- PHP Code for Login Page Starts Here  -->

<?php 

    if(isset($_POST['login']))
	{
            $uid=trim(stripslashes(strip_tags($_POST['username'])));
            $pwd=trim(stripslashes(strip_tags($_POST['password'])));
            include_once('DBConnect.php');
            $res=mysqli_query($conn,"select * from admins where username='$uid' AND password='$pwd'");
            if(mysqli_num_rows($res)>0)
		{		
                    session_start();
                    $_SESSION['username']=$uid;
                    echo "<script>window.location='dashboard.php';</script>";
		}
            else
		{
                    $emsg="<b style='color:red;margin-top:10%'>Sorry! Incorrect Username or Password!</b>";
		}
            mysqli_close($conn);
	}

?>



<!-- PHP Code for Login Page Ends Here  -->



<!DOCTYPE html>
<html lang="en">
<head>
  <div class="content">
  <p>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/assets2/css/style.css" rel="stylesheet">
   <link href="assets/assets2/css/login.css" rel="stylesheet">
 
 
  <!-- =======================================================
  * Template Name: Sailor - v4.7.0
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="loginbkg" >

    <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="../index.php">Sai  Bus Services</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="../index.php" class="active">Home</a></li>

          <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../about.php">About</a></li>
              <li><a href="../team.php">Team</a></li>
              <!--<li><a href="testimonials.html">Testimonials</a></li>

              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>  -->
            </ul>
          </li>
          <li><a href="../services.php">Services</a></li>
          <li><a href="../contact.php">Contact</a></li>
          <li><a href="../feedback.php">Feedback</a></li>
<!--          <li><a href="pricing.html">Booking</a></li>
          <li><a href="blog.html">Help</a></li>  -->

          <li><a href="../register.php">Register</a></li>
          <li class="dropdown"><a href="#" class="getstarted"><span>Log In</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../user/login.php">User Log In</a></li>
              <li><a href="adminlogin.php">Admin Log In</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">
		
		<!-- Login from start here --->
		
		<br><br><br><br>

		<div class="login-form">
                    <form action="" method="post">
			<center><h1>Admin Login Page</h1></center>
			<div class="content">
				<div class="input-field">
                                    <input type="text" name="username" placeholder="UserID" required="">
				</div>
				<div class="input-field">
                                    <input type="password" name="password" placeholder="Password" required="">
				</div>
				
			</div>
			<div class="action">
				<button type="submit" name="login">Login</button>
				<button type="reset" name="reset">Reset</button>
			</div>
			</form>
		</div>



            <!-- Login from end here --->
		
      </div>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>