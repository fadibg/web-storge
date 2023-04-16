<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="css/main.css" rel="stylesheet">
  <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
  <title>Document</title>
</head>
<body>
<?php 

 session_start();
if($_SESSION['passwords']=="husadmsamin@husadmsamin")
{
?>
  <section class="messages">
  <table class="table table-dark table-hover">
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Subject</th>
    <th>Message</th>
    <th>Remove</th>
    <?php
    include 'conect.php';
    $sql1 = ("SELECT * FROM port");
    $result = $conn->query($sql1);
    while($row = $result->fetch_assoc()) {
     
    echo "<tr >
      <td >".$row["id_mss"]."</td>
      <td >".$row["name"]."</td>
      <td >".$row["email"]."</td>
      <td >".$row["sup"]."</td>
      <th>".$row["massge"]."</th>
      <th><a href='delete.php?id=".$row['id_mss']."&mode=m'>x</a></th>
    </tr>";}
    ?>
  </table>
  </section>
  <section class="download">
  <table class="table table-dark table-hover">
    <th>ID</th>
    <th>Name</th>
    <th>Download</th>
    <th>Remov</th>
    <?php
    include 'conect.php';
    $sql1 = ("SELECT * FROM portfolio");
    $result = $conn->query($sql1);
    while($row = $result->fetch_assoc()) {
     
    echo "<tr >
      <td >".$row["id_project"]."</td>
      <td >".$row["namep"]."</td>
      <th><a href='Download.php?id=".$row['id_project']."'>#</a></th>
      <th><a href='delete.php?id=".$row['id_project']."&mode=s'>x</a></th>
    </tr>";}
  }else{
    header("Location:index.php");
  }
    ?>
    
  </table>
  </section>
  <form class="login-form" action="#">
      <button><a href="upload.php">upload</a></button>
      <button style="width:auto;" value="logout" name="action_file" >logout</button>
      </form>
 <?php
 if(isset($_GET["action_file"])=="logout"){
  $_SESSION["passwords"]="";
 header("Location:index.php");
 }
 ?>
</body>
</html>