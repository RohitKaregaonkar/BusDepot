<!--  ****************************  This Page is For Admin to Add Schedule of Available Buses  ***********************  -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Create User</title>
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
  <link href="assets/css/createschedule.css" rel="stylesheet">

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

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Elements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <center>
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Create Admin<hr></h2>

              <!-- *************************************** Ticket Booking Form Starts Here ********************************** -->
              <form action="addadmin.php" method="post">
<!--
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label">Full Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" value="Full-Name" name="fullname" disabled>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-8">
                      <input type="text" class="form-control" value="Email" name="email" disabled>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label">Contact No.</label>
                  <div class="col-sm-8">
                      <input type="text" class="form-control" value="Contact No." name="contact" disabled>
                  </div>
                </div>  -->
<!--
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile">
                  </div>
                </div>
-->

                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label">Full Name</label>
                  <div class="col-sm-8">
                      <input type="text" class="form-control" placeholder="Full Name" name="fullname" required="">
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="Email" name="email" required="">
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label">Age</label>
                  <div class="col-sm-4">
                    <input type="number" class="form-control" value="18" name="age" required="">
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label">Gender</label>
                  <div class="col-sm-3">
                    <div class="form-check">
                      <input class="" type="radio" name="gender" id="gridRadios1" value="Male" required="">
                      <label class="form-check-label" for="gridRadios1">
                        Male &ensp;&ensp;
                      </label>
                      <input class="" type="radio" name="gender" id="gridRadios2" value="Female">
                      <label class="form-check-label" for="gridRadios2">
                        Female
                      </label>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label">Contact</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="Contact" name="contact" required="">
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label">Username</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="Username" name="username" required=""> 
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label">Password</label>
                  <div class="col-sm-6">
                    <input type="password" class="form-control" placeholder="Password" name="password" required="">
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label">Confirm Password</label>
                  <div class="col-sm-6">
                    <input type="password" class="form-control" placeholder="Confirm Password" name="confirmpassword" required="">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-3 col-form-label">Photo</label>
                  <div class="col-sm-6">
                      <input class="form-control" type="file" id="photo" name="photo">
                  </div>
                </div>
<!--
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label"> Source Location</label>
                  <div class="col-sm-6">
                      <select class="form-select" name="source" aria-label="Default select example">
                      <option selected>Choose</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>

                
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label"> Destination Location</label>
                  <div class="col-sm-6">
                    <select class="form-select" name="dest" aria-label="Default select example">
                      <option selected>Choose</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-3 col-form-label">No. of Tickets</label>
                  <div class="col-sm-6">
                      <input type="number" name="total_tickets" class="form-control" value="0">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-3 col-form-label">Date of Journey</label>
                  <div class="col-sm-6">
                    <input type="date" name="journey_date" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputTime" class="col-sm-3 col-form-label">Time of Journey</label>
                  <div class="col-sm-6">
                    <input type="time" name="journey_time" class="form-control">
                  </div>
                </div>
-->             <br>
                <div class="row mb-4">
                  <!--<label class="col-sm-2 col-form-label">Submit Button</label>-->
                  <div class="col-sm-12">
                    <center>
                    <button type="submit" class="btn btn-primary">Create Admin</button>&ensp;
                    <!--<button type="submit" class="btn btn-primary">Add New</button> -->
                    <button type="reset" class="btn btn-primary">Reset</button>
                    </center>
                  </div>
                </div>

              </form>
              <!-- *************************************** Ticket Booking Form Ends Here ********************************** -->
            </div>
          </div>

        </div>
      </center>
      </div>
    </section>

  </main><!-- End #main -->

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