<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">
  <title>Document</title>
</head>
<body>
<?php 
 session_start();
 $servername = "localhost";
$username = "root";
$password = "";
$db = "tdb";
//create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);}
if($_SESSION['type']=="1")
{
?>
  <section class="users">
  <table class="table table-dark table-hover">
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>phone</th>
    <th>price</th>
    <th>order</th>
    <th>Remove user</th>
    <?php
    
    $sql1 = ("SELECT * FROM users");
    $result = $conn->query($sql1);
    while($row = $result->fetch_assoc()) {
     
    echo "<tr >
      <td >".$row["id"]."</td>
      <td >".$row["name"]."</td>
      <td >".$row["email"]."</td>
      <td >".$row["phone"]."</td>
      <td>";
      $id=$row["id"];
      $sql2 = "SELECT v.price + COALESCE (bt.price)+COALESCE (car.price) + COALESCE (hotel.price)+COALESCE (program.price)+COALESCE(at.price) AS price 
      FROM users JOIN v ON v.id_user=users.id JOIN bt ON bt.id_user=users.id JOIN car ON car.id_user=users.id JOIN hotel ON hotel.id_user=users.id JOIN program ON program.id_user=users.id JOIN at ON at.id_user=users.id WHERE id=$id";
    $result1 = $conn->query($sql2);
    while($row1 = $result1->fetch_assoc()) {
      $price=$row1["price"];
      echo  "$price</td>";}
      echo"
      <td>
      
    ";
    $sql3 = ("SELECT aat.name AS airplan,at.price AS airp_prise,abt.name AS bust,bt.price AS bustp,acar.type AS car,car.price AS car_p,ahotel_name.name AS hotel,hotel.price AS hotelpris,aprogram.name AS program,program.price AS pro_price,av.name AS visa,v.price AS v_price FROM users JOIN at ON at.id_user=users.id JOIN aat ON at.id_aat=aat.id JOIN bt ON bt.id_user=users.id JOIN abt on abt.id=bt.id_b JOIN car ON car.id_user=users.id JOIN acar ON acar.id=car.id_car JOIN hotel ON hotel.id_user=users.id JOIN ahotel_name ON hotel.id_h=ahotel_name.id JOIN program ON program.id_user=users.id JOIN aprogram ON aprogram.id=program.id_p JOIN v ON v.id_user=users.id JOIN av ON av.id=v.id_av WHERE users.id=$id");
  $result2 = $conn->query($sql3);
  while($row2 = $result2->fetch_assoc()) {
    echo "<table class='table table-dark table-hover'>
    <th>order</th>
     <tr>Ticket flight</tr>
     <tr>Ticket Bus</tr>
     <tr>Reserve a car</tr>
     <tr>Hotel</tr>
     <tr>program</tr>
     <tr>Visa</tr>
     <th>commpany</th>
     <tr>".$row2["airplan"]."</tr>
     <tr>".$row2["bust"]."</tr>
     <tr>".$row2["car"]."</tr>
     <tr>".$row2["hotel"]."</tr>
     <tr>".$row2["program"]."</tr>
     <tr>".$row2["visa"]."</tr>
    <th>price</th>
     <tr>".$row2["airp_prise"]."</tr>
     <tr>".$row2["bustp"]."</tr>
     <tr>".$row2["car_p"]."</tr>
     <tr>".$row2["hotelpris"]."</tr>
     <tr>".$row2["pro_price"]."</tr>
     <tr>".$row2["v_price"]."</tr>
    <th>remove</th>
     <tr><a href='delete.php?id=".$row["id"]."&mode=o'&kind='a'>x</a></tr> 
     <tr><a href='delete.php?id=".$row["id"]."&mode=o'&kind='b'>x</a></tr>
     <tr><a href='delete.php?id=".$row["id"]."&mode=o'&kind='c'>x</a></tr>
     <tr><a href='delete.php?id=".$row["id"]."&mode=o'&kind='h'>x</a></tr>
     <tr><a href='delete.php?id=".$row["id"]."&mode=o'&kind='p'>x</a></tr>
     <tr><a href='delete.php?id=".$row["id"]."&mode=o'&kind='v'>x</a></tr>
      </table>
      </td>
      <td><a href='delete.php?id=".$row["id"]."&mode=u'>#</a></td>
    </tr>";}}
    ?>
  </table>
  </section>
  
  <section class="airplan">
  <table class="table table-dark table-hover">
    <th>ID</th>
    <th>Name</th>
    <th>type</th>
    <th>from country</th>
    <th>to country</th>
    <th>price</th>
    <th>Remove user</th>
    <?php
     $sql1 = ("SELECT * FROM aat");
     $result = $conn->query($sql1);
     while($row = $result->fetch_assoc()) { 
     echo "<tr >
       <td >".$row["id"]."</td>
       <td >".$row["name"]."</td>
       <td >".$row["type"]."</td>
       <td >".$row["from_c"]."</td>
       <td >".$row["to_c"]."</td>
       <td >".$row["price"]."</td>
       <th><a href='delete.php?id=".$row['id']."&mode=a'>x</a></th>
     </tr>";}

  ?>
  <form action = "" method = "POST" enctype = "multipart/form-data">
  <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Name</label>
  <input type="text" name="aname" class="form-control" id="formGroupExampleInput" placeholder="Enter Name">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">type</label>
  <input type="text" name="type" class="form-control" id="formGroupExampleInput" placeholder="Enter Name">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">from</label>
  <input type="text" name="from" class="form-control" id="formGroupExampleInput" placeholder="Enter Name">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">to</label>
  <input type="text" name="to" class="form-control" id="formGroupExampleInput" placeholder="Enter Name">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">price</label>
  <input type="text" name="price" class="form-control" id="formGroupExampleInput" placeholder="Enter Name">
</div>
<input type = "submit"/>
  </form>
  <?php
if (isset($_POST['aname'])){
  $name=$_POST["aname"];
  $type=$_POST["type"];
  $from_c=$_POST["from"];
  $to_c=$_POST["to"];
  $price=$_POST["price"];
  mysqli_query($db,"INSERT INTO `aat`(`id`, `name`, `type`, `from_c`, `to_c`, `price`) VALUES (NULL,'$name','$type','$from_c','$to_c','$price');");
  header('location:dashbord.php');
}
  ?>
</table>
  </section>

  <section class="buss">
  <table class="table table-dark table-hover">
    <th>ID</th>
    <th>Name</th>
    <th>type</th>
    <th>from </th>
    <th>to </th>
    <th>start time</th>
    <th>end time</th>
    <th>price</th>
    <th>Remove </th>
    <?php
     $sql1 = ("SELECT * FROM abt");
     $result = $conn->query($sql1);
     while($row = $result->fetch_assoc()) { 
     echo "<tr >
       <td >".$row["id"]."</td>
       <td >".$row["name"]."</td>
       <td >".$row["from_p"]."</td>
       <td >".$row["to_p"]."</td>
       <td >".$row["from_t"]."</td>
       <td >".$row["to_t"]."</td>
       <td >".$row["price"]."</td>
       <th><a href='delete.php?id=".$row['id']."&mode=b'>x</a></th>
     </tr>";}

  ?>
  <form action = "" method = "POST" enctype = "multipart/form-data">
  <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Name</label>
  <input type="text" name="bname" class="form-control" id="formGroupExampleInput" placeholder="Enter Name">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">from plase</label>
  <input type="text" name="fromp" class="form-control" id="formGroupExampleInput" placeholder="Enter Name">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">to plase</label>
  <input type="text" name="top" class="form-control" id="formGroupExampleInput" placeholder="Enter Name">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">from plase</label>
  <input type="text" name="fromt" class="form-control" id="formGroupExampleInput" placeholder="Enter Name">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">to plase</label>
  <input type="text" name="tot" class="form-control" id="formGroupExampleInput" placeholder="Enter Name">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">price</label>
  <input type="text" name="price" class="form-control" id="formGroupExampleInput" placeholder="Enter Name">
</div>
<input type = "submit"/>
  </form>
  <?php
if (isset($_POST['bname'])){
  $name=$_POST["bname"];
  $fromp=$_POST["fromp"];
  $top=$_POST["top"];
  $fromt=$_POST["fromt"];
  $tot=$_POST["tot"];
  $price=$_POST["price"];
  mysqli_query($db,"INSERT INTO `abt` (`id`, `name`, `from_p`, `to_p`, `from_t`, `to_t`, `price`) 
  VALUES (NULL,'$name','$fromp', '$top', '$fromt', '$tot', '$price');");
  header('location:dashbord.php');
}
  ?>
</table>
  </section>


  
  <section class="car">
  <table class="table table-dark table-hover">
    <th>ID</th>
    <th>type</th>
    <th>price</th>
    <th>Remove </th>
    <?php
     $sql1 = ("SELECT * FROM acar");
     $result = $conn->query($sql1);
     while($row = $result->fetch_assoc()) { 
     echo "<tr >
       <td >".$row["id"]."</td>
       <td >".$row["type"]."</td>
       <td >".$row["price"]."</td>
       <th><a href='delete.php?id=".$row['id']."&mode=c'>x</a></th>
     </tr>";}

  ?>
  <form action = "" method = "POST" enctype = "multipart/form-data">
  <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">type</label>
  <input type="text" name="cname" class="form-control" id="formGroupExampleInput" placeholder="Enter Name">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">price</label>
  <input type="text" name="price" class="form-control" id="formGroupExampleInput" placeholder="Enter Name">
</div>
<input type = "submit"/>
  </form>
  <?php
if (isset($_POST['cname'])){
  $type=$_POST["cname"];
  $price=$_POST["price"];
  mysqli_query($db,"INSERT INTO `acar` (`id`, `type`, `prise`) VALUES (NULL, '$type', '$price');");
  header('location:dashbord.php');
}
  ?>
</table>
  </section>



  <section class="hotel">
  <table class="table table-dark table-hover">
    <th>ID</th>
    <th>Name</th>
    <th>stars</th>
    <th>type </th>
    <th>location </th>
    <th>Remove </th>
    <?php
     $sql1 = ("SELECT * FROM ahotel_name");
     $result = $conn->query($sql1);
     while($row = $result->fetch_assoc()) { 
     echo "<tr >
      <td >".$row["id"]."</td>
       <td >".$row["name"]."</td>
       <td >".$row["stars"]."</td>
       <td >".$row["type"]."</td>
      <td >".$row["location"]."</td>
       <th><a href='delete.php?id=".$row['id']."&mode=h'>x</a></th>
     </tr>";}
  ?>
  <form action = "" method = "POST" enctype = "multipart/form-data">
  <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Name</label>
  <input type="text" name="hname" class="form-control" id="formGroupExampleInput" placeholder="Enter Name">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">stars</label>
  <input type="text" name="stars" class="form-control" id="formGroupExampleInput" placeholder="Enter Name">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">type</label>
  <input type="text" name="type" class="form-control" id="formGroupExampleInput" placeholder="Enter Name">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">location</label>
  <input type="text" name="location" class="form-control" id="formGroupExampleInput" placeholder="Enter Name">
</div>
<input type = "submit"/>
  </form>
  <?php
if (isset($_POST['hname'])){
  $name=$_POST["hname"];
  $stars=$_POST["stars"];
  $type=$_POST["type"];
  $location=$_POST["location"];
  mysqli_query($db,"INSERT INTO `ahotel_name` (`id`, `name`, `stars`, `type`, `location`) 
  VALUES (NULL, '$name', '$stars', '$type', '$location');");
  header('location:dashbord.php');
}
  ?>
</table>
  </section>


  
  <section class="program">
  <table class="table table-dark table-hover">
    <th>ID</th>
    <th>Name</th>
    <th>discreption</th>
    <th>price</th>
    <th>Remove </th>
    <?php
     $sql1 = ("SELECT * FROM aprogram");
     $result = $conn->query($sql1);
     while($row = $result->fetch_assoc()) { 
     echo "<tr >
       <td >".$row["id"]."</td>
       <td >".$row["name"]."</td>
       <td >".$row["dis"]."</td>
       <td >".$row["price"]."</td>
       <th><a href='delete.php?id=".$row['id']."&mode=p'>x</a></th>
     </tr>";}

  ?>
  <form action = "" method = "POST" enctype = "multipart/form-data">
  <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Name</label>
  <input type="text" name="pname" class="form-control" id="formGroupExampleInput" placeholder="Enter Name">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">discreption</label>
  <input type="text" name="dis" class="form-control" id="formGroupExampleInput" placeholder="Enter Name">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">price</label>
  <input type="text" name="price" class="form-control" id="formGroupExampleInput" placeholder="Enter Name">
</div>
<input type = "submit"/>
  </form>
  <?php
if (isset($_POST['pname'])){
  $name=$_POST["pname"];
  $dis=$_POST["dis"];
  $price=$_POST["price"];
  mysqli_query($db,"INSERT INTO `aprogram` (`id`, `name`, `dis`, `prise`) 
  VALUES (NULL,'$name','$dis','$price');");
  header('location:dashbord.php');
}
  ?>
</table>
  </section>


  
  <section class="visa">
  <table class="table table-dark table-hover">
    <th>ID</th>
    <th>Name</th>
    <th>location</th>
    <th>price</th>
    <th>Remove </th>
    <?php
     $sql1 = ("SELECT * FROM av");
     $result = $conn->query($sql1);
     while($row = $result->fetch_assoc()) { 
     echo "<tr >
       <td >".$row["id"]."</td>
       <td >".$row["name"]."</td>
       <td >".$row["location"]."</td>
       <td >".$row["price"]."</td>
       <th><a href='delete.php?id=".$row['id']."&mode=v'>x</a></th>
     </tr>";}

  ?>
  <form action = "" method = "POST" enctype = "multipart/form-data">
  <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Name</label>
  <input type="text" name="vname" class="form-control" id="formGroupExampleInput" placeholder="Enter Name">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">location</label>
  <input type="text" name="location" class="form-control" id="formGroupExampleInput" placeholder="Enter Name">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">price</label>
  <input type="text" name="price" class="form-control" id="formGroupExampleInput" placeholder="Enter Name">
</div>
<input type = "submit"/>
  </form>
  <?php
if (isset($_POST['vname'])){
  $vname=$_POST["vname"];
  $location=$_POST["location"];
  $price=$_POST["price"];
  $sqla="INSERT INTO `av` (`id`, `name`, `location`, `price`) 
  VALUES (NULL,'$vname','$location','$price');";
  $conn->query($sqla);
 // header('location:dashbord.php');
}}else{
  header('location:login.php');
}
  ?>
</table>
  </section>
  <form class="login-form" action="#">
      <button style="width:auto;" value="logout" name="action_file" >logout</button>
      </form>
      <?php if(isset($_GET["action_file"])=="logout"){
 $_SESSION["passwords"]="";
header("Location:index.php");
}?>
</body>
</html>