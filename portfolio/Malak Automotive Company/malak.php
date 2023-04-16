<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
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
 <form class="search-form">
<input type="text" placeholder="search">
<button>search</button>
 </form>     
<link rel="stylesheet"type="text/css" href="ccccc.css">
<h2> Image Gallery</h2> 
<h4>موقع مكتب الشركة للسفريات </h4>
<table>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$datapaes="Malak_Automotive_Company";
// Create connection
$db = mysqli_connect($servername, $username, $password,$datapaes);
$result2= mysqli_query($db, "SELECT * FROM cars ");
  echo"<tr><th>first name</th><th>last name</th><th>claint phon</th><th>car</th><th>car phone</th><th>driver</th><th>delver date</th><th>resive date</th><th>final pric</th></tr>";
  while ($row = mysqli_fetch_array($result2)) {
    echo"<tr><th>".$row['firstname']."</th><th>".$row['lastname']."</th><th>".$row['clintphon']."</th><th>".$row['car']."</th><th>".$row['phone']."</th><th>".$row['driver']."</th><th>".$row['receiveddate']."</th><th>".$row['deliverydate']."</th><th>".$row['finalprice']."</th><td><a href='delete.php?id=".$row['id_post']."&le=".$row['firstname']."'>x</a></td></tr>";
  }
  ?>
</table>
</body>
</html>