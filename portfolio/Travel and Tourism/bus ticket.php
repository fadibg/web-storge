<!DOCTYPE html>
    <html lang="ar" dir="rtl">
    <head>
     <meta charset="utf-8">
     <title>تذاكر الحافلة</title>
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
    <!--start contents -->
    <div class="contents">
        <div class="text">
            <h1>تأمين تذاكر حافلة</h1>
            <ol>
                <lh>يوجد لدينا نوعان من تذاكر الحافلات:</lh>
                <li>التذاكر الاقتصادية</li>
                <li>تذاكر (vip)</li>
            </ol>
            <ol>
                <lh>نتميز عن منافسينا:</lh>
                <li>رحلات لكل انحاء العالم</li>
                <li>أفضل الاسعار المدروسة</li>
                <li>مستوى عال من الامان والمصداقية</li>
            </ol>
        </div>
        <div class="pic"><img src="img/pic03.jpg"></div>
    </div>
    <!--end contents -->
    <table class="table">
    <caption>العروض</caption>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tdb";
    //create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
     $sql1 = ("SELECT * FROM abt ");
     $result = $conn->query($sql1);
     while($row = $result->fetch_assoc()) {
       echo "<tr>
       <td>".$row["id"]."</td>
       <td>".$row["name"]."</td>
       <td>".$row["from_p"]."</td>
       <td>".$row["to_p"]."</td>
       <td>".$row["from_t"]."</td>
       <td>".$row["to_t"]."</td>
       <td>".$row["price"]."</td>
            <td><button><a href='contact.php'>احجز الان</a></button></td>
        </tr>";
        }?>
    </table>
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

