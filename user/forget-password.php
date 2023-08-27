<!-- PHP Code for Forget-Password Starts Here  -->
<!--

session_start();
/** @var type $_POST */
if(isset($_POST['forget-password']))
    {
        $username = $_POST['username'];
        $password = $_POST['newpassword'];
        $confirmpassword = $_POST['confirmpassword'];
        
        include_once('DBConnect.php');
        
        $result = mysql_query("SELECT * FROM users WHERE username='$username'");
        
        if(!$result)
        {
            echo "The username you entered does not exist";
        }
        #else if($password!= mysql_result($result, 0))
        #{
        #    echo "You entered an incorrect password";
        #}
        if($newpassword=$confirmpassword)
        {
            $sql=mysql_query($con, "UPDATE user_info SET password='$newpassword' where user_id='$username'");
            if($sql)
            {
                echo "Congratulations You have successfully changed your password";
            }
            else
            {
                echo "Password and Confirm Password do not Match";
            }
        }
        mysqli_close($con);
        }
    else
    {
        $emsg="<b style='color:red;margin-top:10%'>Sorry! Error Occured!</b>";
    }


-->

<!-- PHP Code for Forget-Password Ends Here  -->



<!DOCTYPE html>
<html lang="en">

<head>


</head>
<body>
<div class="content">
<p>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forget Password</title>
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
   <link href="assets/assets2/css/forget-password.css" rel="stylesheet">
 
 
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

      <h1 class="logo me-auto"><a href="index.html">Sai bus Sevices</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html">Home</a></li>

          <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="about.html">About</a></li>
              <li><a href="team.html" class="active">Team</a></li>
              <li><a href="testimonials.html">Testimonials</a></li>

              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="services.html">Services</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="pricing.html">Pricing</a></li>
          <li><a href="blog.html">Blog</a></li>

          <li><a href="contact.html">Contact</a></li>
          <li><a href="index.html" class="getstarted">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  	
		<!-- Forget Password Form Starts Here  -->
		
		<br><br><br><br>

		<div class="form">
			<form action="forget-user-password.php" method="post">
			<center><h1>Forget Password</h1></center>
			<div class="content">
				<div class="input-field">
                                    <input type="UserID" name="username" placeholder="UserID" required="">
				</div>
				<div class="input-field">
                                    <input type="password" name="newpassword" placeholder="New Password" required="">
				</div>
                                <div class="input-field">
                                    <input type="password" name="confirmpassword" placeholder="Confirm Password" required="">
				</div>
                        </div>
			<div class="action">
                            <button type="submit" name="forget-password">Reset Password</button>
                            <button>Clear</button>
			</div>
			</form>
		</div>

    <!-- Forget Password Form end here --->


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