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
<title>Invoice  List</title>

<link href="css/font-awesome.css" rel="stylesheet"> 
</head> 
<body bgcolor="pink">
		 <?php include_once('includes/header.php');?>
		
				<div class="tables" id="exampl">
					
					
	<?php
	$AptNumber=intval($_GET['AptNumber']);
$ret=mysqli_query($con,"select * from tblappointment where AptNumber='$AptNumber'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>				
				
					<div><center><h3 style="font-size:25px;">Invoice Details:#<?php echo $AptNumber;?></h4></center><br>
						<center><table  style=" width:90%; height:500px; background-color:white;" border="2"> 
<tr>
<th colspan="6">Customer Details</th>	
</tr>
							 <tr style="text-align:center"> 
								<th>Name</th> 
								<td><?php echo $row['Name']?></td> 
								<th>Contact no.</th> 
								<td><?php echo $row['PhoneNumber']?></td>
								<th>Email </th> 
								<td><?php echo $row['Email']?></td>
							</tr> 
							 <tr style="text-align:center"> 
								<th>Service</th> 
								<td><?php echo $row['Services']?></td> 
								<th>Invoice Date</th> 
								<td colspan="3"><?php echo $row['AptDate']?></td> 
							</tr> 
<?php }?>


<tr  colspan="6">
<th colspan="6">Services Details</th>	
</tr>
<tr>
<th  colspan="2">#</th>	
<th  colspan="2">Service</th>
<th  colspan="2">Cost</th>
</tr>

<?php
$ret=mysqli_query($con,"select tblservices.ServiceName,tblservices.Cost  
	from  tblservices 
	join tblappointment where tblservices.ServiceName=tblappointment.Services AND tblappointment.AptNumber='$AptNumber'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
	?>

<tr style="text-align:center">
<th  colspan="2"><?php echo $cnt;?></th>
<td  colspan="2"><?php echo $row['ServiceName']?></td>	
<td  colspan="2"><?php echo $subtotal=$row['Cost']?></td>
</tr>
<?php 
$cnt=$cnt+1;
$gtotal+=$subtotal;
} ?>

<tr>
<th colspan="2" style="text-align:center">Grand Total</th>
<th  colspan="4"><?php echo $gtotal?></th>	

</tr>
</table>
  <p style="margin-top:1%"  align="center">
<i class="fa fa-print fa-2x" style="cursor: pointer;"  OnClick="CallPrint(this.value)" >CLICK HERE TO PRINT THE INVOICE</i>
</p>
	  <script>
function CallPrint(strid) {
var prtContent = document.getElementById("exampl");
var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
WinPrint.document.write(prtContent.innerHTML);
WinPrint.document.close();
WinPrint.focus();
WinPrint.print();
WinPrint.close();
}
</script>
</body>
</html>
<?php }  ?>