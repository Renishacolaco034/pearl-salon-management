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
<title>Invoice List</title>



</head> 
<body style="background-color:pink";>
	
		 <?php include_once('includes/header.php');?>
		
		<div>
			<div>
						<div align="center"><h4 align="center">Search Invoice</h4><br>
							<form method="post" name="search" action=""  style="border:25px solid white; width:300px; height:200; background-color:white;">
							
								<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>

  
							 <div align="center> <label for="exampleInputEmail1">Search by Billing Number<br></label> <input id="searchdata" type="text" name="searchdata" required="true">
						
							<br><br>
							  <button type="submit" name="search" style="background-color:pink;padding:5px;border-radius:40px;font-size:15px;width:120px;" >Search</button> </form> 
						</div><br><br>
						<?php
if(isset($_POST['search']))
{ 

$sdata=$_POST['searchdata'];
  ?>
  <h4 align="center">Result against "<?php echo $sdata;?>" keyword </h4> <br>
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
$ret=mysqli_query($con,"select ordnumber,name,products,amount_paid from  orders where ordnumber='$sdata'"); 
$num=mysqli_num_rows($ret);
if($num>0){
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
	

						  </tr>   
						  <?php 
$cnt=$cnt+1;
} } 
else{
	 ?>
  <tr>
    <td colspan="8"> No record found against this search</td>

  </tr>
   
<?php } } ?></tbody> </table> 
					
</body>
</html>
<?php }  ?>