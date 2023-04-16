<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$datapaes="Malak_Automotive_Company";
// Create connection
$conn = new mysqli($servername, $username, $password,$datapaes);
?>
<html>
<head>
<style>
</style>
</head>
<body>
<nav class="menu">
     <ul>
       <li><a href="index.php">Home</a></li>
       <li><a href="join.php">join</a></li>
       <li><a href="contact.php">contact</a></li>
     </ul> 
     <form class="search-form">
 <form class="search-form" action="se.php">
<input type="text" placeholder="search"  name="se">
<button>search</button>
 </form>
     
<link rel="stylesheet"type="text/css" href="ccccc.css">
<h2> Image Gallery</h2> 
<h4>موقع مكتب الشركة للسفريات </h4>
<form class="login-form" action="caro.php">
      <button style="width:auto;" value="logout" name="action_file" >logout</button>
      </form>
<form action="helper.php" method="GET" >
<div class="container">
  <div class="row">
    <div class="col-25">
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="firstname" placeholder="Your name.." >
    </div>
  </div>
  <div class="row">
    <div class="col-25">
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="lastname" placeholder="Your last name.." >
    </div>
  </div>
  <input name="clintphone" type="=email" placeholder="09********" >
</div>
<label for="lname">from</label>
<input type="date"name="datetime_fron" >
  <div class="row">
    <div class="col-25">
      <label for="country">to</label>
    </div>
    <input type="date"name="datet_to" >
   <?php echo "<input type=hidden name='price' value='".$_GET['price']."'>"; 
   echo "<input type=hidden name='id' value='".$_GET["idcar"]."'>";
   ?>
  </div>
    <input type="submit" value="Submit" >
  </form>

</body>
</html>