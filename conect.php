<?php 

// database connection

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "company_database";
//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);}
// end database connection
$contact_num=" 099 99 99 99 9";
$contact_email=" ppg@ppg.com";
$company_name="ppg";
$company_address="Syria/Swidaa";





