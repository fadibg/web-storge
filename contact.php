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
	  <title>PPG - Contact</title>
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
          <li><a href="index.php">Home</a></li>
          <li>Contact</li>
        </ol>
        <h2>Contact</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p><?php echo $company_address;?></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p><?php echo $contact_email;?></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p><?php echo $contact_num;?></p>
            </div>
          </div>

        </div>

        <div class="row">

          

          <div class="col-lg-6">
            <form action="" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'&&$_POST["email"]){
                      if($_POST['email']=="husadmsamin@husadmsamin.ppg"){
                      
                      echo "<a href='login.php'>Login</a>";
                      
                    }else{
                      $servername = "localhost";
                      $username = "root";
                      $password = "";
                      $datapaes="company_database";
                      // Create connection
                      $emailm=$_POST['email'];
                      $sup=$_POST['subject'];
                      $name=$_POST['name'];
                      $mess=$_POST['message'];
                      $db = mysqli_connect($servername, $username, $password, $datapaes);
                      $sql = "INSERT INTO port (id_mss, email, sup, name, massge) VALUES (NULL,'$emailm','$sup','$name','$mess');";
                      // execute query
                      $reselt=$conn->query($sql);
                    }
                     }?>
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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
          <li><i class="bx bx-chevron-right"></i> <a href="#">Portfolio</a></li>
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
  
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  <script src="assets/php-email-form/validate.js"></script>
  
  <script src="assets/owl.carousel/owl.carousel.min.js"></script>
 
  <script src="assets/counterup/counterup.min.js"></script>
  <script src="assets/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="JavaScript/main.js"></script>

</body>

</html>