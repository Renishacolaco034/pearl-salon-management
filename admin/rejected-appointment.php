<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{



  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Rejected Appointment</title>
<style>
 a {
	text-decoration:none;
	color:white;
}
</style>

<body bgcolor="pink">

		 <?php include_once('includes/header.php');?>
					
						<form >
				<div >
					<h3 style="font-size:35px ;text-align:center;color:black;" >Rejected Appointment:</h3><br>
						<center>	<table border="1px" height="100" width="700" style=" border:2px solid black;font-size:17px;">  <thead> <tr> <th>#</th> <th> Appointment Number</th> <th>Name</th><th>Mobile Number</th> <th>Appointment Date</th><th>Appointment Time</th><th>Action</th> </tr> </thead> <tbody>
<?php
$ret=mysqli_query($con,"select *from  tblappointment where Status='2'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

						 <tr> <th scope="row"><?php echo $cnt;?></th> <td><?php  echo $row['AptNumber'];?></td> <td><?php  echo $row['Name'];?></td><td><?php  echo $row['PhoneNumber'];?></td><td><?php  echo $row['AptDate'];?></td> <td><?php  echo $row['AptTime'];?></td> <td><a href="view-appointment.php?viewid=<?php echo $row['ID'];?>">View</a></td> </tr>   <?php 
$cnt=$cnt+1;
}?></tbody> </table> 
					
</body>
</html>
<?php }  ?>