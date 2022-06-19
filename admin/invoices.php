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
<title>Customer List</title>
</head> 
<body bgcolor="pink">
		 <?php include_once('includes/header.php');?>
					<div><center><h3 style="font-size:25px;">Invoice Details</h4></center><br>
						<center><table  style=" width:90%; height:100%; background-color:white;" border="2"> 
							<thead> <tr> 
								<th>#</th> 
								<th>Appointment Number</th> 
								<th>Customer Name</th> 
								<th>Invoice Date</th> 
								<th>Action</th>
							</tr> 
							</thead> <tbody>
<?php
$ret=mysqli_query($con,"select * from tblappointment");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

						 <tr style="text-align:center"> 
						 	<th scope="row"><?php echo $cnt;?></th> 
						 	<td><?php  echo $row['AptNumber'];?></td>
						 	<td><?php  echo $row['Name'];?></td>
						 	<td><?php  echo $row['AptDate'];?></td> 
						 		<td><a href="view-invoice.php?AptNumber=<?php  echo $row['AptNumber'];?>">View</a></td> 

						  </tr>   <?php 
$cnt=$cnt+1;
}?></tbody> </table> 
					
</body>
</html>
<?php }  ?>