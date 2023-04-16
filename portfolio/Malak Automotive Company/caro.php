<?php $servername = "localhost";
$username = "root";
$password = "";
$datapaes="Malak_Automotive_Company";
// Create connection
$conn = new mysqli($servername, $username, $password,$datapaes);
session_start();
if(isset($_GET["action_file"])=="logout"){
    $_SESSION["usernames"] = "";
   $_SESSION["passwords"] = "";
   $_SESSION["activ"]=false;
   $_SESSION["type"]=0;
 header("Location:index.php");
  }
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
<form class="login-form" action="#">
      <button style="width:auto;" value="logout" name="action_file" >logout</button>
      </form>

<form class="row" method="Post" action='#' enctype='multipart/form-data'>
    <div class="col-25">
      <label for="fname">car name and model</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="car" placeholder="Your car..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Specifications</label>
      </div>
    <div class="col-75">
      <input type="text" id="fname" name="sy" placeholder="Your Specifications..">
    </div>
    <div class="row">
    <div class="col-25">
      <label for="lname">phone</label>
      </div>
    <div class="col-75">
      <input type="text" id="fname" name="ph" placeholder="Your phone..">
    </div>
    <div class="col-25">
      <label for="lname">rent price</label>
      </div>
    <div class="col-75">
      <input type="text" id="fname" name="rp" placeholder="Your rent..">
    </div>
<?php
$ido=$_SESSION["passwords"];
   $db = mysqli_connect("localhost", "root", "", "malak_automotive_company");
  
    $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    
    // Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	// image file directory
    $target = "imgs/".basename($image); 
                                                                                                                                                                      
  	$sql = "INSERT INTO cars (id,id_post, carimg,car,Specifications,rentprice,phone,firstname,lastname,clintphon,receiveddate,deliverydate,driver,finalprice) VALUES (NULL, '$ido','$image','".$_POST['car']."','".$_POST['sy']."','".$_POST['rp']."','".$_POST['ph']."','1',NULL,NULL,NULL,NULL,NULL,NULL);";
    // execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  ?>
 	<input type='hidden' name='size' value='1000000'>
  <div>
   <input type='file' name='image'>
  </div>
  	<div>
 	<button type='submit' name='upload'>POST</button>
  	</div>
  </form>
</form>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$datapaes="Malak_Automotive_Company";
// Create connection
$db = mysqli_connect($servername, $username, $password,$datapaes);
$result2= mysqli_query($db, "SELECT * FROM cars WHERE id_post='$ido'");
  echo"<tr><th>first name</th><th>last name</th><th>claint phon</th><th>car</th><th>car phone</th><th>driver</th><th>delver date</th><th>resive date</th><th>final pric</th></tr>";
  while ($row = mysqli_fetch_array($result2)) {
    echo"<tr><th>".$row['firstname']."</th><th>".$row['lastname']."</th><th>".$row['clintphon']."</th><th>".$row['car']."</th><th>".$row['phone']."</th><th>".$row['driver']."</th><th>".$row['receiveddate']."</th><th>".$row['deliverydate']."</th><th>".$row['finalprice']."</th><td><a href='delete.php?id=".$row['id']."&le=".$row['firstname']."'>x</a></td></tr>";
  }
  ?>
</table>

</body>
</html>