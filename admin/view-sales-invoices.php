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

<link href="css/font-awesome.css" rel="stylesheet"> 
</head> 
<body <body bgcolor="pink">
	
		 <?php include_once('includes/header.php');?>
		
				<div class="tables" id="exampl">
					
					
	<?php
	$ordnumber=intval($_GET['ordnumber']);
$ret=mysqli_query($con," select ordnumber,name,phone,products,amount_paid from  orders where orders.ordnumber='$ordnumber'");
$cnt=1;
$ordnumber=intval($_GET['ordnumber']);

while ($row=mysqli_fetch_array($ret)) {

?>				
				<div><center><h3 style="font-size:25px;">Invoice Details:#<?php echo $ordnumber;?></h4></center><br>
						<center><table  style=" width:90%; height:500px; background-color:white;text-align:center;" border="2">
					
<tr>
<th colspan="6">Customer Details</th>	
</tr>
							 <tr> 
								<th>Name</th> 
								<td><?php echo $row['name']?></td> 
								<th>Contact no.</th> 
								<td><?php echo $row['phone']?></td>
								
							</tr> 
							 <tr> 
								<th>Product</th> 
								<td><?php echo $row['products']?></td> 
								<th>Amount</th> 
								<td><?php echo $row['amount_paid']?></td> 
							</tr> 
<?php }?>


<th colspan="4">Product Details</th>	
</tr>
<tr>
<th>#</th>	
<th>Product</th>
<th colspan="3" >Cost</th>
</tr>

<?php
$ret=mysqli_query($con," select products,amount_paid from  orders where orders.ordnumber='$ordnumber'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
	?>

<tr>
<th><?php echo $cnt;?></th>
<td><?php echo $row['products']?></td>	
<td colspan="2" ><?php echo $subtotal=$row['amount_paid']?></td>
</tr>
<?php 
$cnt=$cnt+1;
$gtotal+=$subtotal;
} ?>

<tr>
<th colspan="2" style="text-align:center">Grand Total</th>
<th colspan="2" ><?php echo $gtotal?></th>	

</tr>
</table>
 <p style="margin-top:1%"  align="center">
<i  style="cursor:pointer;" OnClick="CallPrint(this.value)" >CLICK HERE TO PRINT THE INVOICE</i>
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