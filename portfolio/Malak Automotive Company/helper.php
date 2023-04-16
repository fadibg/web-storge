<?php
$servername = "localhost";
$username = "root";
$password = "";
$datapaes="Malak_Automotive_Company";
$finp=$_GET["price"];
$df=strtotime($_GET['datetime_fron']);
$dt=strtotime($_GET['datet_to']);
$finp=(round(($dt-$df))/(60*60*24))*$finp;
$sql="UPDATE `cars` SET `firstname` = '".$_GET['firstname']."', `lastname` = '".$_GET['lastname']."', `clintphon` = '".$_GET['clintphone']."', `receiveddate` = '".$_GET['datetime_fron']."', `deliverydate` = '".$_GET['datet_to']."', `finalprice` = '".$finp."' WHERE `cars`.`id` = '".$_GET['id']."';";
$db = mysqli_connect($servername, $username, $password,$datapaes);
$db->query($sql);
header("Location:car.php?idcar=".$_GET['id']."&price=".$_GET['price']."");
?>