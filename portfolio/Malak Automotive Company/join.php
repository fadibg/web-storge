<?php 
$servername = "localhost";
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
if(isset($_GET["ty"])){
  mysqli_query($conn,"INSERT INTO `users` (`id`, `username`, `password`, `email`, `phone`, `type`) VALUES (NULL, '".$_GET['user']."', '".$_GET['pass']."', '".$_GET['email']."', '".$_GET['phone']."', '".$_GET['ty']."');");
header("Location:index.php");
}
if(isset($_GET["user"])&&isset($_GET["pass"])){
  $us=$_GET["user"];
  $pas=$_GET["pass"];
// Check connection
if(!$conn){die("connction error".mysql_error());}
  $result = $conn->query("SELECT * FROM users WHERE username='$us' AND password='$pas'");
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $_SESSION["passwords"] = $row["id"];
    $_SESSION["type"]=$row["type"];
  }
  $_SESSION["usernames"] = $us;
}else if(isset($_GET["ty"])!=true){
?>
   <script language="javascript">
   alert("the Username or password is incorrect please re-enter the writ Username and password");
   window.location.href = "join.php";
   </script>
   <?php 
}
}
?>
    
     <?php 
  
$conn->close();
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
<?php if ($_SESSION["usernames"]=="" ){?>
       <form class="login-form">
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">login</button>
<div id="id01" class="modal">
  <form class="modal-content animate" action="">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
     </div>
     <div class="box">
     <h2>login</h2>
     <form action="#" method="post"> 
     
          <div class="inputBox">
            <input type="name" name="user" required="">
            <label> Username</label>
          </div>
          <div class="inputBox">
            <input type="password" name="pass"required="">
            <label>password</label>
          </div>
          <div class="inputBox">
          <input type="submit" name="" value="submit">     
           </div>
          </form>
     </div>
    </div>
  </form>
     <?php }else {?>
      <form class="login-form" action="join.php">
      <button style="width:auto;" value="logout" name="action_file" >logout</button>
      <?php 
        } ?>
      </form>

      <form class="login-form">
<button onclick="document.getElementById('id').style.display='block'" style="width:auto;">sign up</button>
<div id="id" class="modal">
  <form class="modal-content animate" action="">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id').style.display='none'" class="close" title="Close Modal">&times;</span>
     </div>
     <div class="box">
     <h2>sign up</h2>
     <form action="#" method="POST"> 
          <div class="inputBox">
            <input type="name" name="user" required="">
            <label> Username</label>
          </div>
          <div class="inputBox">
            <input type="password" name="pass"required="">
            <label>password</label>
          </div>
          <div class="inputBox">
            <input type="email" name="email"required="">
            <label>email</label>
          </div>
          <div class="inputBox">
            <input type="phone" name="phone"required="">
            <label>phone</label>
          </div>
          <?php 
          echo"<select name='ty'>";
          echo"<option value='3'>استأجار سيارة</option>";
          echo"<option value='2'>صاحب السيارة</option>";
          echo"</select>";
          ?>
          <div class="inputBox">
          <input type="submit" name="" value="submit">     
           </div>
          </form>
<?php 
if($_SESSION["type"]==2){
  header("Location:caro.php");
  $_SESSION["activ"]=true;
          }
elseif($_SESSION["type"]==3)
{
  $_SESSION["activ"]=true;
          }
          elseif($_SESSION["type"]==1)
{
  header("Location:malak.php");
          }
          ?>
     
    
  </form>
</body>
</html>