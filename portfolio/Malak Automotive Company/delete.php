<?php
$servername = "localhost";
$username = "root";
$password = "";
$datapaes="Malak_Automotive_Company";
$db = mysqli_connect($servername, $username, $password,$datapaes);

    if(isset($_GET['id']))
      {
        $id=$_GET['id'];
        if ($_get['le']!='1')
        {$result2= mysqli_query($db,"UPDATE `cars` SET `firstname` = '1', `lastname` = NULL, `clintphon` = NULL, `receiveddate` = NULL, `deliverydate` = NULL, `finalprice` = NULL WHERE `cars`.`id` = 1;");}
        else
       { $result2= mysqli_query($db,"DELETE FROM `cars` WHERE `id`='".$id."'");}
          header('location:malak.php?id='.$id.'&le='.$_GET['le'].'');
          
      }
?>