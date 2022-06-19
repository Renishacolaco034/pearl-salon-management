<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{
if(isset($_POST['submit'])){


$uid=intval($_GET['addid']);
$invoiceid=mt_rand(100000000, 999999999);
$sid=$_POST['sids'];
for($i=0;$i<count($sid);$i++){
   $svid=$sid[$i];
$ret=mysqli_query($con,"insert into tblinvoice(Userid,ServiceId,BillingId) values('$uid','$svid','$invoiceid');");


echo '<script>alert("Assigned service successfully")</script>';
echo "<script>window.location.href ='invoices.php'</script>";
}
}
 


  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Assign Services</title>


</head> 
<body style="background-color:pink;">
	<div>

		 <?php include_once('includes/header.php');?>
		
		<div>
			<div>
				<div align="center">
					<h3>Assign Services</h3><br>
					
					
				
					<div align="center">
						
<form method="post">
						<table border="2" width="800" height="600"> <thead> <tr> <th>#</th> <th>Service Name</th> <th>Service Price</th> <th>Action</th> </tr> </thead> <tbody>
<?php
$ret=mysqli_query($con,"select *from  tblservices");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

 <tr> 
<th scope="row"><?php echo $cnt;?></th> 
<td><?php  echo $row['ServiceName'];?></td> 
<td><?php  echo $row['Cost'];?></td> 
<td><input type="checkbox" name="sids[]" value="<?php  echo $row['ID'];?>" ></td> 
</tr>   
<?php 
$cnt=$cnt+1;
}?>
<tr>
<td colspan="4" align="center">
<button type="submit" name="submit" class="btn btn-default">Submit</button>		
</td>

</tr>

</tbody> </table> 
</form>
					</div>
				</div>
			</div>
		</div>
		<!--footer-->
		 <?php include_once('includes/footer.php');?>
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js"> </script>
</body>
</html>
<?php }  ?>