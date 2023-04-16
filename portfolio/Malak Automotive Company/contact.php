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

<div class="post">
        <p style="color: #FFF;margin: 0 0 30px;padding: 0;text-align: right;">أهلا و سهلا بكم في موقع تواصل </p>
        <p style="color: #FFF;margin: 0 0 30px;padding: 0;text-align: right;">: لأي استفسار أو محلوظة الرجاء التواصل معنا عبر الايميلات التالية </p>
        <p style="color: #FFF;margin: 0 0 30px;padding: 0;text-align: right;"> malak.h@gmail.com :ملاك</p>
        <p style="color: #FFF;margin: 0 0 30px;padding: 0;text-align: right;">مشاركتك تهمنا </p>
        <p style="color: #FFF;margin: 0 0 30px;padding: 0;text-align: right;">و شكرا </p>
        <p style="color: #FFF;margin: 0 0 30px;padding: 0;text-align: right;">فريق عمل موقع ملاك  </p>
      </div>

</body>
</html>