<!DOCTYPE html>
 <html dir="rtl">
 <head>
    
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
        <title>تسجيل الدخول</title>
</head>
<body>
    
<div class="cotn_principal">
        <div class="cont_centrar">
        
          <div class="cont_login">
        <div class="cont_info_log_sign_up">
              <div class="col_md_login">
        <div class="cont_ba_opcitiy">
                
                <h2>تسجيل الدخول</h2>  
          <p>سجل دخولك الان</p> 
          <button class="btn_login" onclick="cambiar_login()">تسجيل الدخول</button>
          </div>
          </div>
        <div class="col_md_sign_up">
        <div class="cont_ba_opcitiy">
          <h2>التسجيل</h2>
        
          
          <p>قم بالتسجيل الان</p>
        
          <button class="btn_sign_up" onclick="cambiar_sign_up()">تسجيل</button>
        </div>
          </div>
               </div>
        
            
            <div class="cont_back_info">
               <div class="cont_img_back_grey">
               </div>
               
            </div>
        <div class="cont_forms" >
            <div class="cont_img_back_">
               
               </div>
               <form method="POST">
         <div class="cont_form_login">
        <a href="#" onclick="ocultar_login_sign_up()" >X</a>
           <h2>تسجيل الدخول</h2>
         <input type="text" placeholder="البريد الالكتروني" name="user"/>
        <input type="password" placeholder="كلمة السر" name="pass"/>
        <input type="submit" class="btn_login" onclick="cambiar_login()" value="تسجيل الدخول">
          </div>
        </form>
        <form method="POST">
           <div class="cont_form_sign_up">
        <a href="#" onclick="ocultar_login_sign_up()">X</a>
             <h2>التسجيل</h2>
        <input type="text" placeholder="البريد الالكتروني" />
        <input type="text" placeholder="اسم المستخدم" />
        <input type="text" placeholder="رقم الموبايل" />
        <input type="password" placeholder="كلمة السر" />
        <input type="password" placeholder="تأكيد كلمة السر" />
        <button class="btn_sign_up" onclick="cambiar_sign_up()">تسجيل</button>
        
          </div>
</form>
            </div>
            
          </div>
         </div>
        </div>
        
    <script src="js/isotope.pkgd.min.js"></script> 
    <script src="js/jquery.min.js"></script>  
    <script src="js/main.js"></script>
</body>
</html>
<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "tdb";
 $conn = new mysqli($servername, $username, $password, $dbname);
 session_start();
       if(isset($_POST['user'])){
    $sql1 = ("SELECT * FROM users");
    $result = $conn->query($sql1);
    while($row = $result->fetch_assoc()) {
    if($row["name"]==$_POST['user']&&$row["pass"]==$_POST['pass']) {
        $_SESSION["type"]=$row["type"];
        if ($_SESSION["type"]==1) {
            header('location:dashbord.php');
        }else{
            $_SESSION["id"]=$row["id"];
            header('location:index.php');
        }
        
    }	
    }}
//header('location:login.php');
?>

