<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
    if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
    
    $cid=$_GET['viewid'];
      $remark=$_POST['remark'];
      $status=$_POST['status'];
     
    
     
   $query=mysqli_query($con, "update  tblappointment set Remark='$remark',Status='$status' where ID='$cid'");
    if ($query) {
    $msg="All remark has been updated.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  
}
  

  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>BPMS || View Appointment</title>
<body bgcolor="pink">

		 <?php include_once('includes/header.php');?>
		
				
						<p style="font-size:16px; color:red;background:cyan;" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
						<h3 style="font-size:35px ;text-align:center;color:black;" >View Appointment:</h4><br>
						
						<?php
$cid=$_GET['viewid'];
$ret=mysqli_query($con,"select * from tblappointment where ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
						<center>	<table border="1px" height="900" width="600" style=" border:2px solid black;font-size:17px;"> <thead>
							<tr>
    <th>Appointment Number</th>
    <td><?php  echo $row['AptNumber'];?></td>
  </tr>
  <tr>
<th>Name</th>
    <td><?php  echo $row['Name'];?></td>
  </tr>

<tr>
    <th>Email</th>
    <td><?php  echo $row['Email'];?></td>
  </tr>
   <tr>
    <th>Mobile Number</th>
    <td><?php  echo $row['PhoneNumber'];?></td>
  </tr>
   <tr>
    <th>Appointment Date</th>
    <td><?php  echo $row['AptDate'];?></td>
  </tr>
 
<tr>
    <th>Appointment Time</th>
    <td><?php  echo $row['AptTime'];?></td>
  </tr>
  
  <tr>
    <th>Services</th>
    <td><?php  echo $row['Services'];?></td>
  </tr>
  <tr>
    <th>Apply Date</th>
    <td><?php  echo $row['ApplyDate'];?></td>
  </tr>
  

<tr>
    <th>Status</th>
    <td> <?php  
if($row['Status']=="1")
{
  echo "Selected";
}

if($row['Status']=="2")
{
  echo "Rejected";
}

     ;?></td>
  </tr>
						
						
							<?php if($row['Remark']==""){ ?>


<form name="submit" method="post" enctype="multipart/form-data"> 

<tr>
    <th>Remark :</th>
    <td>
    <textarea name="remark" placeholder="" rows="12" cols="20" class="form-control wd-450" required="true"></textarea></td>
   </tr>

  <tr>
    <th>Status :</th>
    <td>
   <select name="status" class="form-control wd-450" required="true" >
     <option value="1" selected="true">Selected</option>
     <option value="2">Rejected</option>
   </select></td>
  </tr>

  <tr align="center">
    <td colspan="2"><button type="submit" name="submit" class="btn btn-az-primary pd-x-20">Submit</button></td>
  </tr>
  </form>
  
<?php } else { ?>
						
						
							<tr>
    <th>Remark</th>
    <td><?php echo $row['Remark']; ?></td>
  </tr>


<tr>
<th>Remark date</th>
<td><?php echo $row['RemarkDate']; ?>  </td></tr>

						</table>
						<?php } ?>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<!--footer-->
		
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