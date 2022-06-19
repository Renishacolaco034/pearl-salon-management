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
<title> Manage Services</title>
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
					<h3 style="font-size:35px ;text-align:center;color:black;" >Manage Services || Update Services </h3><br>
					
					<center>	<table border="1px" height="700" width="1200" style="color:black ;border:2px solid black;font-size:17px;"> <thead>
					<tr> <th>#</th> <th>Service Name</th> <th>Service Price</th> <th>Creation Date</th><th>Action</th> </tr> </thead> <tbody>
<?php
$ret=mysqli_query($con,"select *from  tblservices");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

						 <tr> <th scope="row"><?php echo $cnt;?></th> <td><?php  echo $row['ServiceName'];?></td> <td><?php  echo $row['Cost'];?></td>
						 <td><?php  echo $row['CreationDate'];?></td> <td><a href="edit-services.php?editid=<?php echo $row['ID'];?>">Edit</a></td> </tr>   <?php 
$cnt=$cnt+1;
}?></tbody> </table> </center>
					
				</div></form>
			
</body>
</html>
<?php }  ?>