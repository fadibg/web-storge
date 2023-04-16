<?php
 session_start();
    include 'conect.php';
    if(isset($_POST['user'])){
    $sql1 = ("SELECT * FROM user");
    $result = $conn->query($sql1);
    while($row = $result->fetch_assoc()) {
    if($row["username"]==$_POST['user']&&$row["password"]==$_POST['pass']) {
        $_SESSION["passwords"]="husadmsamin@husadmsamin";
        header('location:dashbord.php');
    }	
    }}
//header('location:login.php');
?>

<DOCTYPE html>
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
        <title>Admin Login</title>
    </head>
    <body>
    <form class="login" action="" method="POST">
		<h4 class="text-center">Admin Login</h4>
		<input class="form-control " type="text" name="user" placeholder="Username" autocomplete="off">
		<input class="form-control " type="password" name="pass" placeholder="Password" autocomplete="new-password">
		<div class="d-grid">
			<input class="btn btn-primary btn-block" type="submit" name="Login">
		</div>
	</form>
    </body>
</html>