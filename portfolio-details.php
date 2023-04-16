<?php
include 'conect.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
	  <link href="css/main.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/h.css" rel="stylesheet">
    <link href="assets/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="assets/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    
    <link href="assets/venobox/venobox.css" rel="stylesheet">
	  <title><?php echo "Portfolio Details"; ?></title>
    <meta content="this is a company website" name="descriptison">
    <meta content="software company" name="keywords">
</head>
<body>
<section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i><a href="mailto:<?php echo $contact_email;?>"><?php echo $contact_email;?></a>
        <i class="icofont-phone"></i><?php echo $contact_num;?>
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="form.html" class="skype"><i class="icofont-skype"></i></a>
      </div>
     
    </div>
    
  </section>

    <!-- ======= Header ======= -->
    <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php"><span><?php echo $company_name; ?></span></a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="portfolio.php?ca=1">Portfolio</a></li>       
          <li><a href="contact.php">Contact</a></li>
          <li ><a href="about.php">About</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Portfolio Details</li>
        </ol>
        <h2>Portfolio Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        <div class="row">

          <div class="col-lg-8">
            <?php
include 'conect.php';
  $sql1 = ("SELECT * FROM portfolio WHERE id_project= ".$_GET['id']."  ");
    $result = $conn->query($sql1);
    while($row = $result->fetch_assoc()) {
      if ($row["urlp"]!="-"&&$row["category"]!=2){
echo "<h2 class='portfolio-title'>".$row["namep"]."</h2>";
  echo " <div class='owl-carousel portfolio-details-carousel'>
  <img src='imgs/".$row["image1"]."' class='img-fluid' alt=''>
  <img src='imgs/".$row["image2"]."' class='img-fluid' alt=''>
  <img src='imgs/".$row["image3"]."' class='img-fluid' alt=''>
            </div>
          </div>";
      echo " <div class='col-lg-4 portfolio-info'>
      <h3>Project information</h3>
      <ul>
        <li><strong>Category</strong>: ";
        switch ($row["category"]) {
          case 1:
            echo "Develop Web Sites";
            break;
          case 2:
            echo "Graphic Design";
            break;
          case 3:
            echo "Data Analyeses";
            break;
            case 4:
              echo "supportive";
              break;
        } 
        echo "</li>
         <li><strong>Project URL</strong>: <a href='http://".$row["urlp"]."' target='_blenk'>".$row["urlp"]."</a></li>
      </ul>

      <p>
      ".$row["discripeion"]."
      </p>
    </div>

  </div>

";
      }else{
        echo "<h2 class='portfolio-title'>".$row["namep"]."</h2>";
  echo " <div class='owl-carousel portfolio-details-carousel'>
  <img src='imgs/".$row["image1"]."' class='img-fluid' alt=''>
  <img src='imgs/".$row["image2"]."' class='img-fluid' alt=''>
  <img src='imgs/".$row["image3"]."' class='img-fluid' alt=''>
            </div>
          </div>";
      echo " <div class='col-lg-4 portfolio-info'>
      <h3>Project information</h3>
      <ul>
        <li><strong>Category</strong>: ";
        switch ($row["category"]) {
          case 1:
            echo "Develop Web Sites";
            break;
          case 2:
            echo "Graphic Design";
            break;
          case 3:
            echo "Data Analyeses";
            break;
            case 4:
              echo "supportive";
              break;
        } 
        echo "</li>
         <li><strong>Project URL</strong>: <a href=''></a></li>
      </ul>

      <p>
      ".$row["discripeion"]."
      </p>
    </div>

  </div>

";
      }
    }?>
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="portfolio.php?ca=1">Portfolio</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Contact</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Portfolio</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="portfolio.php?ca=2">Develop Web Sites</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="portfolio.php?ca=3">Graphic Design</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="portfolio.php?ca=4">Data Analyeses</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="portfolio.php?ca=5">supportive</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-contact">
        <h4>Contact Us</h4>
        <p>
          
          Alswedaa,
          Syria <br><br>
          <strong>Phone:</strong><?php echo $contact_num;?><br>
          <strong>Email:</strong><?php echo $contact_email;?><br>
        </p>

      </div>

      <div class="col-lg-3 col-md-6 footer-info">
        <h3>About PPG</h3>
        <p>
        <h4>Who We Are</h4>
        We are a team of web design,
        development and marketing professionals who love partnering with clients
        and businesses to help them achieve online success.
        

        </p>
        <div class="social-links mt-3">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="container">
  <div class="copyright">
    &copy; Copyright <strong><span>PPG</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
   
    Designed by <a href="index.php">PPG</a>
  </div>
</div>
</footer><!-- End Footer -->
<!-- Vendor JS Files -->
<script src="assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/php-email-form/validate.js"></script>
  <script src="assets/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/counterup/counterup.min.js"></script>
  <script src="assets/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/venobox/venobox.min.js"></script>
  <script src="JavaScript/main.js"></script>
  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="css/style.css">
  <link href="css/main.css" rel="stylesheet">



</body>
</html>