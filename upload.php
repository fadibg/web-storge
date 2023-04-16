<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="css/main.css" rel="stylesheet">
  <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
  <title>Document</title>
</head>
<body>
<section class="upload">
  <form action = "" method = "POST" enctype = "multipart/form-data">
    <div class="row-cols-sm-1">
  <div class="input-group mb-3">
  <button class="btn btn-outline-secondary" type="button" id="button-addon1">SImage</button>
  <input type="file" name = "images" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
</div>
<div class="input-group mb-3">
  <button class="btn btn-outline-secondary" type="button" id="button-addon1">Image1</button>
  <input type="file" name = "image1" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
</div>
<div class="input-group mb-3">
  <button class="btn btn-outline-secondary" type="button" id="button-addon1">Image2</button>
  <input type="file" name = "image2" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
</div>
<div class="input-group mb-3">
  <button class="btn btn-outline-secondary" type="button" id="button-addon1">Image3</button>
  <input type="file" name = "image3" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value=1>
  <label class="form-check-label" for="inlineRadio1">Develop Web Sites</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value=2>
  <label class="form-check-label" for="inlineRadio1">Graphic Design</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value=3>
  <label class="form-check-label" for="inlineRadio1">Data Analyeses</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value=4>
  <label class="form-check-label" for="inlineRadio1">supportive</label>
</div>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Name</label>
  <input type="text" name="proname" class="form-control" id="formGroupExampleInput" placeholder="Enter Name">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Description</label>
  <input type="text" name="dis" class="form-control" id="formGroupExampleInput" placeholder="Enter Description">
</div>
         <input type = "file" name = "pro" />
         <input type = "submit"/>
      
         <ul>
            <li>Sent file: <?php if(isset($_FILES['pro'])) echo $_FILES['pro']['name'];  ?>
            <li>File size: <?php if(isset($_FILES['pro'])) echo $_FILES['pro']['size'];  ?>
            <li>File type: <?php if(isset($_FILES['pro'])) echo $_FILES['pro']['type'] ?>
         </ul>
      
      </form>
      </section>
<?php
session_start();
if($_SESSION['passwords']=="husadmsamin@husadmsamin")
{
include 'conect.php';
function ext($path,$filname){
  $zip = new ZipArchive;
  $res = $zip->open($filname);
  if ($res === TRUE) {
    $zip->extractTo('portfolio/');
    $zip->close();
    unlink($filname);
  }
 }
 //sersh for sql file in project folder and create database
function search_file_sql($dir){
 $files = scandir($dir);
 //
 foreach($files as $key => $value){
     $path = realpath($dir.DIRECTORY_SEPARATOR.$value);
     if(!is_dir($path)) {
         if('sql' == pathinfo($value, PATHINFO_EXTENSION)){
          $target=$path;
            creat_db($target);
            return str_replace(".sql","",basename($path));
            break;
         }
     } else if($value != "." && $value != "..") {
       search_file_sql($path);         
     }  
  } 
 }
 //test to sershh indxe
function se_index($dir){
  $file_to_search="index.php";
  $files = scandir($dir);
  echo "file found<br>";
  echo $dir;
  echo "file found<br>";
  foreach($files as $key => $value){
  
      $path = realpath($dir.DIRECTORY_SEPARATOR.$value);
  
      if(!is_dir($path)) {
  
          if($file_to_search == $value){
              echo "file found<br>";
              echo $path;
              return $path;
              break;
          }
  
      } else if($value != "." && $value != "..") {
  
         // se_index($path);
  
      }  
   } 
}
function creat_db($path){
 $servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// Create database
$file = basename($path, ".sql"); 
$sql = "CREATE DATABASE $file";
if ($conn->query($sql) === TRUE) {
echo "Database created successfully";
} else {
echo "Error creating database: " . $conn->error;
}
// Temporary variable, used to store current query
$conn = new mysqli($servername, $username, $password,$file);
$templine = '';
// Read in entire file
$lines = file($path);
// Loop through each line
foreach ($lines as $line)
{
// Skip it if it's a comment
if (substr($line, 0, 2) == '--' || $line == '')
  continue;

// Add this line to the current segment
$templine .= $line;
// If it has a semicolon at the end, it's the end of the query
if (substr(trim($line), -1, 1) == ';')
{
  // Perform the query
  $conn->query($templine) or print('Error performing query \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
  // Reset temp variable to empty
  $templine = '';
}
}
echo "Tables imported successfully";
}
$servername = "localhost";
$username = "root";
$password = "";
$datapaes="company_database";
// Create connection
$db = mysqli_connect($servername, $username, $password, $datapaes);
$url="";
$url1="";
if(isset($_FILES['pro'])){
$f1=$_FILES['pro']['name'];}
if(isset($_FILES['pro'])&&str_replace(basename($f1, ".zip"),"","$f1")==".zip"){
   if(isset($_FILES['pro'])&&$_FILES['pro']['name']!=""){
      $errors= array();
      $file_name = $_FILES['pro']['name'];
      $file_tmp = $_FILES['pro']['tmp_name'];
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"portfolio/".$file_name);
         ext("portfolio/","portfolio/".$file_name);
         $url1=str_replace(".zip","","portfolio/$file_name/");
         //echo $url1;
         $proname=basename($file_name, ".zip");
        //$url1=search_file($url1,"index.html",$url);
         //echo "Success ";
         $path=$url1;
         $arr = array('127.0.0.1/ppg/',$url1);
         $url1= join("",$arr);
         $sql_path =search_file_sql($path);
         $dis=$_POST["dis"];
         $image1 = $_FILES['image1']['name'];
         $image2 = $_FILES['image2']['name'];
         $image3 = $_FILES['image3']['name'];
         $images = $_FILES['images']['name'];
         $imgpath1="imgs/".basename($image1);
         $imgpath2="imgs/".basename($image2);
         $imgpath3="imgs/".basename($image3);
         $imgpaths="imgs/".basename($images);
         switch ($_POST["inlineRadioOptions"]) {
          case "1":
            $cat=1;
            break;
          case "2":
            $cat=2;
            break;
          case "3":
            $cat=3;
            break;
            case "4":
              $cat=4;
              break;
        } 

         move_uploaded_file($_FILES['image1']['tmp_name'], $imgpath1);
         move_uploaded_file($_FILES['image2']['tmp_name'], $imgpath2);
         move_uploaded_file($_FILES['image3']['tmp_name'], $imgpath3);
         move_uploaded_file($_FILES['images']['tmp_name'], $imgpaths);
        $sql = "INSERT INTO portfolio (id_project, simage, image1, image2, image3, discripeion, category, urlp, pro_loc, sql_path, namep) VALUES (NULL,'$images','$image1','$image2','$image3','$dis','$cat','$url1','$path','$sql_path','$proname');";
        // execute query
        echo $conn->query($sql);
         header('location:dashbord.php');
      }
   }}
   if(isset($_FILES['pro'])&&$_FILES['pro']['name']=="")  {
    //$arr = array('http://127.0.0.1/ppg/',$url1);
    if(isset($_POST['proname'])&&$_POST['proname']!=""){
    $url1= "-";
   // $sql_path =search_file_sql($path);
    $dis=$_POST["dis"];
    $proname=$_POST["proname"];
    $image1 = $_FILES['image1']['name'];
    $image2 = $_FILES['image2']['name'];
    $image3 = $_FILES['image3']['name'];
    $images = $_FILES['images']['name'];
    $imgpath1="imgs/".basename($image1);
    $imgpath2="imgs/".basename($image2);
    $imgpath3="imgs/".basename($image3);
    $imgpaths="imgs/".basename($images);
    switch ($_POST["inlineRadioOptions"]) {
     case "1":
       $cat=1;
       break;
     case "2":
       $cat=2;
       break;
     case "3":
       $cat=3;
       break;
       case "4":
         $cat=4;
         break;
   } 
   $path="";
   $sql_path="";
    move_uploaded_file($_FILES['image1']['tmp_name'], $imgpath1);
    move_uploaded_file($_FILES['image2']['tmp_name'], $imgpath2);
    move_uploaded_file($_FILES['image3']['tmp_name'], $imgpath3);
    move_uploaded_file($_FILES['images']['tmp_name'], $imgpaths);
   $sql = "INSERT INTO portfolio (id_project, simage, image1, image2, image3, discripeion, category, urlp, pro_loc, sql_path, namep) 
   VALUES (NULL,'$images','$image1','$image2','$image3','$dis','$cat','$url1','$path','$sql_path','$proname');";
   // execute query
   echo $conn->query($sql);
    header('location:dashbord.php');
   }}else{
    if(isset($_POST['proname'])&&$_POST['proname']!=""){
      $url1=$_FILES['pro']['name'];
      $arr = array('127.0.0.1/ppg/portfolio/',$url1);
         $url1= join("",$arr);
     // $sql_path =search_file_sql($path);
     $file_name = $_FILES['pro']['name'];
      $file_tmp = $_FILES['pro']['tmp_name'];
     move_uploaded_file($file_tmp,"portfolio/".$file_name);
      $dis=$_POST["dis"];
      $proname=$_POST["proname"];
      $image1 = $_FILES['image1']['name'];
      $image2 = $_FILES['image2']['name'];
      $image3 = $_FILES['image3']['name'];
      $images = $_FILES['images']['name'];
      $imgpath1="imgs/".basename($image1);
      $imgpath2="imgs/".basename($image2);
      $imgpath3="imgs/".basename($image3);
      $imgpaths="imgs/".basename($images);
      switch ($_POST["inlineRadioOptions"]) {
       case "1":
         $cat=1;
         break;
       case "2":
         $cat=2;
         break;
       case "3":
         $cat=3;
         break;
         case "4":
           $cat=4;
           break;
     } 
     $path="portfolio/".$file_name;
     $sql_path="";
      move_uploaded_file($_FILES['image1']['tmp_name'], $imgpath1);
      move_uploaded_file($_FILES['image2']['tmp_name'], $imgpath2);
      move_uploaded_file($_FILES['image3']['tmp_name'], $imgpath3);
      move_uploaded_file($_FILES['images']['tmp_name'], $imgpaths);
     $sql = "INSERT INTO portfolio (id_project, simage, image1, image2, image3, discripeion, category, urlp, pro_loc, sql_path, namep) 
     VALUES (NULL,'$images','$image1','$image2','$image3','$dis','$cat','$url1','$path','$sql_path','$proname');";
     // execute query
     echo $conn->query($sql);
      header('location:dashbord.php');
   }
  // use RarArchive;
}}else{header("Location:index.php");}

?>
</body>
</html>