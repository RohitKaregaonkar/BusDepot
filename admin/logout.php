<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Log Out</title>
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
            <a href="bookticket.php">
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
          <li>
            <a href="createschedule.php">
              <i class="bi bi-circle"></i><span>Create Schedule</span>
            </a>
          </li>
          <li>
            <a href="viewschedule.php">
              <i class="bi bi-circle"></i><span>View Schedule</span>
            </a>
          </li>
        </ul>
      </li><!-- ****************************** End Sidebar Component Schedule Nav **************************************** -->
      
      <!-- ****************************** Here Starts Sidebar Component Schedule User **************************************** -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>User</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="createuser.php">
              <i class="bi bi-circle"></i><span>Create User</span>
            </a>
          </li>
          <li>
            <a href="viewuser.php">
              <i class="bi bi-circle"></i><span>View User</span>
            </a>
          </li>
        </ul>
      </li><!-- ****************************** End Sidebar Component Schedule User **************************************** -->
      
      <!-- ****************************** Here Starts Sidebar Component Schedule Admin **************************************** -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Admin</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="createadmin.php">
              <i class="bi bi-circle"></i><span>Create Admin</span>
            </a>
          </li>
          <li>
            <a href="viewadmin.php">
              <i class="bi bi-circle"></i><span>View Admin</span>
            </a>
          </li>
        </ul>
      </li><!-- ****************************** End Sidebar Component Schedule Admin **************************************** -->

      <li class="nav-heading">Pages</li>

      <!-- ****************** Profile Page Starts Here ******************* -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="profile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- ****************** Profile Page Starts Here ******************* -->
      
      <!-- ****************** Change User Password Page Starts Here ******************* -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="change-user-password.php">
          <i class="bi bi-person"></i>
          <span>Change User Password</span>
        </a>
      </li><!-- ****************** Change User Password Page Starts Here ******************* -->
      
      <!-- ****************** Change Admin Password Page Starts Here ******************* -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="change-admin-password.php">
          <i class="bi bi-person"></i>
          <span>Change Admin Password</span>
        </a>
      </li><!-- ****************** Change Admin Password Page Starts Here ******************* -->
      
      <!-- ****************** Log Out Page Starts Here ******************* -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="logout.php">
          <i class="bi bi-person"></i>
          <span>Log Out</span>
        </a>
      </li><!-- ****************** Log Out Page Starts Here ******************* -->
    </ul>

  </aside><!-- End Sidebar-->

  <!-- ************************** Main Method ****************************** -->
  <main id="main" class="main">

    
<!-- ******************************************************* Profile Starts Here ******************************************************* -->

    <section class="section profile">
      <div class="row">
        <center>
        <div class="col-xl-10">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
      <!--        <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link " data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul> -->
              <div class="tab-content pt-2">

                <div>

                  <!-- Profile Edit Form -->
                  <form action="../index.php" method="post">
                    <div>
                        <label><h2 class="card-title">Are You Sure...?</h2></label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Yes</button>
                        <button type="reset" class="btn btn-primary" disabled>No</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>
                
              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
        </center>
<!-- ******************************************************* Profile Ends Here ******************************************************* -->        
      </div>
    </section>

</main><!-- End #main -->




  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
  <!--  <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div> -->
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
    </div>
  </footer><!-- End Footer -->

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