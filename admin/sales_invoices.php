<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{



  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Customer List</title>
<body bgcolor="pink">
		 <?php include_once('includes/header.php');?>
		
		
						<div><center><h3 style="font-size:25px;">Sales Invoice List</h4></center><br>
						<center><table  style=" width:90%; height:100%; background-color:white;" border="2">
								
								<th>Order Id</th> 
								<th>ordnumber</th>
								<th>Customer Name</th> 
								<th>Product</th> 
								<th>Amount</th>
								<th>Action</th>
							</tr> 
							</thead> <tbody>
<?php
$ret=mysqli_query($con,"select ordnumber,name,products,amount_paid from  orders "); 
	
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

						 <tr style="text-align:center"> 
						 	<th scope="row"><?php echo $cnt;?></th> 
							<td><?php  echo $row['ordnumber'];?></td>
						 	<td><?php  echo $row['name'];?></td>
						 	<td><?php  echo $row['products'];?></td>
						 	<td><?php  echo $row['amount_paid'];?></td> 
						 	<td><a href="view-sales-invoices.php?ordnumber=<?php  echo $row['ordnumber'];?>">View</a></td> 
	

						  </tr>   <?php 
$cnt=$cnt+1;
}?></tbody> </table> 
					
</body>
</html>
<?php }  ?>












