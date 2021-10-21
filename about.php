<?php
include "conn.php";
include "conn.php";
$strSQL = "SELECT * FROM data_pribadi, skill";
$execStrSQL = mysqli_query($conn, $strSQL);
$dataSQL = mysqli_fetch_array($execStrSQL);
// echo '<pre>'; print_r($dataSQL); echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon/favicon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal - v4.6.0
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header">
    <div class="container">

      <!-- <h1><a href="index.html">Emily Jones</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.svg" alt="" class="img-fluid"></a> -->
      <!-- <a href="index.php" class="mr-auto"><img src="assets/img/logo.svg" alt="" class="img-fluid" style="width:128px; margin-bottom:20px"></a> -->
      <h1><a href="index.php">Barry Samuel</a></h1>
      <h2>I'm a passionate <span>Web Developer</span> from Indonesia</h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="index.php">Home</a></li>
          <li><a class="nav-link active" href="about.php#about">About</a></li>
          <li><a class="nav-link" href="resume.php#resume">Resume</a></li>
          <li><a class="nav-link" href="portofolio.php#portfolio">Portfolio</a></li>
          <li><a class="nav-link" href="contact.php#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>Learn more about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/logo.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <!-- <p>
            Hi there, my name is Barry Samuel and i am currently enrolled as student at Pembangunan Jaya University studying
            computer science. My current interest in the computer science field are <b>computer vision, artificial intelligent</b>
            and <b>full-stack web development</b>.
          </p> -->
          <p><?= $dataSQL["about_desc"] ?></p>
          <div class="row"> 
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><a href="<?= $dataSQL["website"] ?>" target="_blank" rel="noopener noreferrer"><?= $dataSQL["website"] ?></a></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?= $dataSQL["phone"] ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Address:</strong> <span><?= $dataSQL["address"] ?></span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span><?= $dataSQL["degree"] ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?= $dataSQL["email"] ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span><?= $dataSQL["freelance_s"] ?></span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div><!-- End About Me -->

    <!-- ======= Skills  ======= -->
    <div class="skills container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row skills-content">

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">HTML <i class="val"><?= $dataSQL["html"] ?>%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="<?= $dataSQL["html"] ?>" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">CSS <i class="val"><?= $dataSQL["css"] ?>%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="<?= $dataSQL["css"] ?>" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Java <i class="val"><?= $dataSQL["java"] ?>%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="<?= $dataSQL["java"] ?>" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">PHP <i class="val"><?= $dataSQL["php"] ?>%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="<?= $dataSQL["php"] ?>" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">C/C++ <i class="val"><?= $dataSQL["c_cpp"] ?>%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="<?= $dataSQL["c_cpp"] ?>" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Python <i class="val"><?= $dataSQL["python"] ?>%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="<?= $dataSQL["python"] ?>" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

      </div>

    </div><!-- End Skills -->

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>