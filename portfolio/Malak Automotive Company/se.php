<?php 
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
<?php
   $se=$_GET['se'];
   $db = mysqli_connect($servername, $username, $password, $datapaes);
   $result2 = mysqli_query($db, "SELECT * FROM cars WHERE car='$se' ");
  
    while ($row = mysqli_fetch_array($result2)) {
        echo"<form class='responsive' action='car.php' method='#'>";
        echo"  <div class='gallery'>";
        echo"      <img src=imgs/".$row['carimg']." alt='Cinque Terre' width='600' height='400'>";
        echo"    <div class='desc'>".$row['car']."</div>";
        echo"<input type=hidden name='idcar' value='".$row['id']."'>";
        echo"<input type=hidden name='price' value='".$row['rentprice']."'>";
        echo"<input type='submit' name='' value='more....'>";
        echo"  </div>";
        echo"</form>";
    }?>
</body>
</html>