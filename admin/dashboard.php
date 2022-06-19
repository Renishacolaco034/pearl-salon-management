<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } 
     ?>
<!DOCTYPE HTML>
<html>
<head>
<title>PBPS | Admin Dashboard</title></head>


		
		
		 
<body style="background-image: url(images/bg-1.jpg);background-repeat:no-repeat;  width:90%; height:100%;	 background-size:100% 100%;">
<?php include_once('includes/header.php');
		?></body>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br>


</html>