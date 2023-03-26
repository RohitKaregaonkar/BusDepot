<!--  ****************************  This Page is For User to Display Tickets List to User   ***********************  -->

<?php 
    include_once('DBConnect.php');
    $username = $_REQUEST['username'];
    $res=mysqli_query($conn,"select * from ticket where username='$username'");
    if(mysqli_num_rows($res)>0)
    {		
        /*session_start();
        $_SESSION['username']=$uid;
        echo "<script>window.location='success.php';</script>";*/
    }
    else
    {
        $emsg="<b style='color:red;margin-top:10%'>Sorry! Incorrect Username...!</b>";
    }
    
    mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>User : View Ticket</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Sai Bus Services</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <!-- ****************************** Starts Sidebar Component Dashboard Nav **************************************** -->
      <li class="nav-item">
        <a class="nav-link " href="dashboard.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- ****************************** End Sidebar Component Dashboard Nav **************************************** -->

      <!-- ****************************** Starts Sidebar Component Ticket Nav **************************************** -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Ticket</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="book.php">
              <i class="bi bi-circle"></i><span>Ticket Booking</span>
            </a>
          </li>
          <li>
            <a href="viewticket.php">
              <i class="bi bi-circle"></i><span>View Ticket</span>
            </a>
          </li>
        </ul>
      </li><!-- ****************************** End Sidebar Component Ticket Nav **************************************** -->

      <!-- ****************************** Here Starts Sidebar Component Schedule Nav **************************************** -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Schedule</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <!--<li>
            <a href="createschedule.php">
              <i class="bi bi-circle"></i><span>Create Schedule</span>
            </a>
          </li>-->
          <li>
            <a href="schedule.php">
              <i class="bi bi-circle"></i><span>View Schedule</span>
            </a>
          </li>
        </ul>
      </li><!-- ****************************** End Sidebar Component Schedule Nav **************************************** -->


      <li class="nav-heading">Pages</li>

      <!-- ****************** Profile Page Starts Here ******************* -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="profile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- ****************** Profile Page Starts Here ******************* -->
      
      <!-- ****************** Change Password Page Starts Here ******************* -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="change-password.php">
          <i class="bi bi-person"></i>
          <span>Change Password</span>
        </a>
      </li><!-- ****************** Change Password Page Starts Here ******************* -->
      
      <!-- ****************** Log Out Page Starts Here ******************* -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="logout.php">
          <i class="bi bi-person"></i>
          <span>Log Out</span>
        </a>
      </li><!-- ****************** Log Out Page Starts Here ******************* -->

<!--
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li>--><!-- End F.A.Q Page Nav -->
<!--
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact Us</span>
        </a>
      </li>--><!-- End Contact Page Nav -->
<!--
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register User</span>
        </a>
      </li>--><!-- End Register Page Nav -->
<!--
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li>--><!-- End Login Page Nav -->
<!--
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li>--><!-- End Error 404 Page Nav -->
<!--
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li>--><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  
<!-- *********************************************** Table Starts Here ******************************************** -->
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>General Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">General</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
      <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><center>View Tickets</center></h5>

              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Ticket ID</th>
                    <th scope="col">Bus Code</th>
                    <th scope="col">Source Location</th>
                    <th scope="col">Destination Location</th>
                    <th scope="col">No. of Tickets</th>
                    <th scope="col">Journey Date</th>
                    <th scope="col">Journey Time</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        while($rows=$res->fetch_assoc())
                        {
                    ?>
                    <tr>
                        <td><?php echo $rows['id']; ?></td>
                    <!--<td><?php echo $rows['username']; ?></td> -->
                        <td><?php echo $rows['buscode']; ?></td>
                        <td><?php echo $rows['source']; ?></td>
                        <td><?php echo $rows['dest']; ?></td>
                        <td><?php echo $rows['total_tickets']; ?></td>
                        <td><?php echo $rows['journey_date']; ?></td>
                        <td><?php echo $rows['journey_time']; ?></td>
                        <td>-</td>
                    </tr>
                    <?php
                        }
                    ?>
                    
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
<!-- *********************************************** Table Ends Here ******************************************** -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>