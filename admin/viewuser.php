<!--  ************************ This Page is For User to Display Schedule of Available Buses to Admin ******************** -->

<?php 
    include_once('DBConnect.php');
    $res=mysqli_query($conn,"select * from users");
/*    if(mysqli_num_rows($res)>0)
    {		
        session_start();
        $_SESSION['username']=$uid;
        echo "<script>window.location='success.php';</script>";
    }
    else
    {
        $emsg="<b style='color:red;margin-top:10%'>Sorry! Incorrect Username or Password!</b>";
    }
*/    
    mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>View User</title>
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

  
<!-- *********************************************** Table Starts Here ******************************************** -->
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>View Users</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">View Users</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
      <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h2 class="card-title"><center>View User<hr></center></h2>

              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">UID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Age</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Email</th>
                    <th scope="col">Created_on</th>
                  </tr>
                </thead>
                <tbody>
               
                    <?php
                        while($rows=$res->fetch_assoc())
                        {
                    ?>
                    <tr>
                        <td><?php echo $rows['id']; ?></td>
                        <td><?php echo $rows['fullname']; ?></td>
                        <td><?php echo $rows['username']; ?></td>
                        <td><?php echo $rows['age']; ?></td>
                        <td><?php echo $rows['gender']; ?></td>
                        <td><?php echo $rows['contact']; ?></td>
                        <td><?php echo $rows['email']; ?></td>
                        <td><?php echo $rows['created_on']; ?></td>
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