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
<title>PBPS || Customer List</title>





</head> 
<body style="background-color:pink";>
	<div>
		
		 <?php include_once('includes/header.php');?>
		<div>
			<div>
				<div>
					<h3 align="center">Customer List</h3><br><br>
					
					
				
					<div align="center">
						
						<table border="2" width="1000px" height="400px"> <thead> <tr> <th>#</th> <th>Name</th> <th>Mobile</th> <th>Creation Date</th><th>Action</th> </tr> </thead> <tbody>
<?php
$ret=mysqli_query($con,"select *from  tblcustomers");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

						 <tr> <th scope="row"><?php echo $cnt;?></th> <td><?php  echo $row['Name'];?></td> 
						 <td><?php  echo $row['MobileNumber'];?></td>
						 <td><?php  echo $row['CreationDate'];?></td>
		<td> <a href="add-customer-services.php?addid=<?php echo $row['ID'];?>">Assign Services</a></td> </tr>   <?php 
$cnt=$cnt+1;
}?></tbody> </table> 
					</div>
				</div>
			</div>
		</div>
	</div>

		
		

	
	
</body>
</html>
<?php }  ?>