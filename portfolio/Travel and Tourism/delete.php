<?php
$servername = "localhost";
$username = "root";
$password = "";
$datapaes="company_database";
$db = mysqli_connect($servername, $username, $password,$datapaes);

if(isset($_GET['id']))
      {
        $id=$_GET['id'];
        if ($_GET['mode']=='s')
        {  include 'conect.php';
            $sql1 = ("SELECT * FROM portfolio");
            $result = $conn->query($sql1);
            while($row = $result->fetch_assoc()) {
             if($row["id_project"]==$id){
            rrmdir($row["pro_loc"]);
            $rr=$row["sql_path"];
            $result2= mysqli_query($db,"DROP DATABASE $rr ;");
            echo "11111111111111111111111111111111111111111";
            echo "DROP DATABASE '$rr'";
            echo "*****************************************";
            $result2= mysqli_query($db,"DELETE FROM `portfolio` WHERE `id_project`='$id' ;");
             }
            }
            
           // echo "123";
        }
        else if ($_GET['mode']=="m")
       { $result2= mysqli_query($db,"DELETE FROM `port` WHERE `id_mss`='$id' ;");}
         header('location:dashbord.php');
          
      }
      function rrmdir($dir)
{
 if (is_dir($dir))
 {
  $objects = scandir($dir);

  foreach ($objects as $object)
  {
   if ($object != '.' && $object != '..')
   {
    if (filetype($dir.'/'.$object) == 'dir') {rrmdir($dir.'/'.$object);}
    else {unlink($dir.'/'.$object);}
   }
  }

  reset($objects);
  rmdir($dir);
 }
}
?>