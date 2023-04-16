<!DOCTYPE html>
    <html lang="ar" dir="rtl">
    <head>
     <meta charset="utf-8">
     <title> الصفحة الرئيسية</title>
     <!--css link -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <!--font icon library -->
        
        <link rel="stylesheet" type="text/css" href="css/all.css">
    </head>
    <body>
    <!--start header  -->
    <header>
     <div class="logo"><a href="index.php"><img src="img/logo.png"></a></div>
     <nav>
      <ul class="menu">
       <li><a href="index.php">الصفحة الرئيسية</a></li>
       <li class="menuli">
        <a href="#">خدماتنا</a>
                   <ul class="dropmenu">
                    <li ><a href="visa.php">تأمين تأشيرة</a></li>
                    <li ><a href="ticket.php">تأمين تذكرة طائرة</a></li>
                    <li ><a href="bus ticket.php">تأمين تذكرة حافلة</a></li>
                    <li ><a href="hotel.php">حجز فندقي</a></li>
                    <li ><a href="program.php">برنامج سياحي </a></li>
                    <li ><a href="car.php">تأجير سيارة</a></li>
                   </ul>
        </li>
       <li><a href="about.php">من نحن</a></li>
       <li><a href="contact.php">تواصل معنا</a></li>
      </ul>
     </nav>
    </header>
    <!--end header  -->

        <section class="upd_sct">
            <form method="POST">
                
                <input type="text" name="user" placeholder="اسم المستخدم"><br>
                
                <input type="text" name="email" placeholder="البريد الالكتروني"><br>
                
                <input type="text" name="phone" placeholder="الموبايل"><br>
                
                <input type="text" name="pass" placeholder="كلمة السر"><br>
                <input type="submit" value="تعديل" class="up-su">
            </form>

        </section>
        

     <!--start footer  -->

    <footer>
     <div class="info">
        <p>نعمل كل يوم من الساعة 8 صباحاً وحتى 10 ليلاً بتوقيت دمشق</p>
     </div>
     <div class="copyright">
        <i class="far fa-copyright">   جميع الحقوق محفوظة</i>
     </div>
    </footer>
    <!--end footer  -->
    </body>
    </html>