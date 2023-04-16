<?php
include 'conect.php';


?>
<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
	  <link href="css/main.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="assets/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="assets/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/venobox/venobox.css" rel="stylesheet">
	  <title>PPG - MainPage</title>
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



  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url(assets/img/slide/slide-1.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Welcome to<span><?php echo $company_name; ?></span></h2>
                <p class="animate__animated animate__fadeInUp">We are a team of web design,development and marketing professionals who love partnering with clientsand businesses to help them achieve online success.</p>
                <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background: url(assets/img/slide/slide-2.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated fanimate__adeInDown">The <span>Design</span></h2>
                <p class="animate__animated animate__fadeInUp">Color scheme, layout, sitemap, and style. We will bring your brand to life with a one of a kind masterpiece, built just for you.</p>
                <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background: url(assets/img/slide/slide-3.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">The <span>Develop</span></h2>
                <p class="animate__animated animate__fadeInUp">For small and large companies, PPG develops innovative custom website through expertise knowledge in Software Development</p>
                <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

    <!-- ======= Featured Section ======= -->
    <section id="featured" class="featured">
      <div class="container">

        <div class="row">
          <div class="col-lg-3">
            <div class="icon-box">
              <i class="icofont-web"></i>
              <h3><a href="portfolio.php?ca=2">Develop Web Sites</a></h3>
              <p>For small and large companies, PPG develops innovative custom websites through expertise knowledge in Software Development</p>
            </div>
          </div>
          <div class="col-lg-3 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="icofont-paint"></i>
              <h3><a href="portfolio.php?ca=3">Graphic Design</a></h3>
              <p>Color scheme, layout, sitemap, and style. We will bring your brand to life with a one of a kind masterpiece, built just for you.</p>
            </div>
          </div>
          <div class="col-lg-3 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="icofont-data"></i>
              <h3><a href="portfolio.php?ca=4">Data Analyeses</a></h3>
              <p>We define your competition and target audience. Discover what is working in your online industry, then design your website accordingly.</p>
            </div>
          </div>
          
                <div class="col-lg-3 mt-4 mt-lg-0">
                    <div class="icon-box">
                      <i class="icofont-support"></i>
                      <h3><a href="portfolio.php?ca=5">supportive</a></h3>
                      <p>This is where you go live, to the world. Design, marketing, and maintenance; we'll be at your side for the life of your site.</p>
                
          </div>

        
      
    </section>
    <br>
    <br>
  
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