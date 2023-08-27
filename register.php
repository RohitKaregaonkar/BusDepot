<!-- PHP Code for Registration Page Starts Here  -->

<!--
    include_once 'DBConnect.php';
    if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

    if(isset($_POST['register']))
    {
        
        ob_start();
        $fullname = $_POST['fullname'];
        $fullname = ucwords(strtolower($fullname));
        $email = $_POST['email'];
        $age= $_POST['age'];
        $gender = $_POST['gender'];
        $contact = $_POST['contact'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password = md5($password);
    
        #$date = date("y-m-d h:i:s");

        #$q3=mysqli_query($con,"INSERT INTO user VALUES  ('$name' , '$gender' , '$college','$email' ,'$mob', '$password')");
        $q3=mysqli_query($con,"INSERT INTO users VALUES  ('$fullname' , '$email' , '$age', '$gender' ,'$contact', '$username' , '$password')");
        echo "Arrived in Query Block";
        if($q3)
        {
            session_start();
            echo "<script>window.location='success.php';</script>";
        }
        else
        {
        #    header("location:index.php?q7=Email Already Registered!!!");
        }
        
        ob_end_flush();
    }
    else
    {
        
    }
--> 



<!-- PHP Code for Registration Page Ends Here  -->

<<html>
    <head>
        <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">

      <title>Register Here</title>
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
      <link href="assets/css/style.css" rel="stylesheet">
      <link href="assets/css/register.css" rel="stylesheet">


      <!-- =======================================================
      * Template Name: Sailor - v4.7.0
      * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
      * Author: BootstrapMade.com
      * License: https://bootstrapmade.com/license/
      ======================================================== -->
    </head>
    <body>
        
          <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">Sai  Bus Services</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>

          <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="about.php">About</a></li>
              <li><a href="team.php">Team</a></li>
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
          <li><a href="services.php">Services</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="feedback.php">Feedback</a></li>
<!--          <li><a href="pricing.html">Booking</a></li>
          <li><a href="blog.html">Help</a></li>  -->

          <li><a href="register.php">Register</a></li>
          <li class="dropdown"><a href="#" class="getstarted"><span>Log In</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="user/login.php">User Log In</a></li>
              <li><a href="admin/adminlogin.php">Admin Log In</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

        <br><br><br><br>

          <div class="form">
          <form action="registeruser.php" method="post">
              <center><h1>Register Here</h1></center>		
              <div class="content">
                  <center>
                  <div class="input-field">
                      <input type=" text" name="fullname" placeholder="Full Name" required="">
                  </div>
                  <div class="input-field">
                      <input type="text" name="email" placeholder="Email" required="">
                  </div>
                  <div class="input-field">
                      <input type="text" name="age" placeholder="Age" required="">
                  </div>				
                  <div class="">
                      <label> Gender &emsp;</label>	
                      <input type="radio" name="gender" value="Male"> Male &ensp;
                      <input type="radio" name="gender" value="Female"> Female
                  </div>
                  <div class="input-field">
                      <input type="text" name="contact" placeholder="Contact" required="">
                  </div>
                  <div class="input-field">
                      <input type="text" name="username" placeholder="UserId" required="">
                  </div>
                  <div class="input-field">
                      <input type="password" name="password" placeholder="Password" required="">
                  </div>
                  <div class="input-field">
                      <input type="password" name="confirmpassword" placeholder=" Confirm Password" required="">
                  </div>
                  <div class="horizontal-group">
                      <div class="form-group left" >
                          <label for="choose-file" class="label-title">Upload Profile Picture &emsp; </label>
                          <input type="file" name="photo" id="choose-file" size="200">
                      </div>
                  </div>     
                  <div class="">
                      <br>
                      <input type="checkbox" name="terms&conditions" placeholder="Terms&Condition" required=""> 
                      <label> &ensp; Terms & Conditions</label>
                  </div>


                  </center>	
              </div>	


              <div class="action">
                  <button type="submit" name="register" value="register">Register</button>
                  <button>Reset</button>
              </div>

          </form>
          </div>

      <!-- Registration From end here --->
        
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
