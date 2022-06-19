<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {
    $adminid=$_SESSION['bpmsaid'];
    $aname=$_POST['adminname'];
  $mobno=$_POST['contactnumber'];
  
     $query=mysqli_query($con, "update tbladmin set AdminName ='$aname', MobileNumber='$mobno' where ID='$adminid'");
    if ($query) {
    $msg="Admin profile has been updated.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again.";
    }
  }
  ?>
<!DOCTYPE HTML>
<html>
<head>
<title> Admin Profile</title>


</head> 
<body bgcolor="pink">
	 <?php include_once('includes/header.php');?>
		<center><h3 style="font-size:35px;font-family:italic ;text-align:center;color:black;">Admin Profile</h3>
				<br>
						<h4 style="font-size:30px;font-family:italic ;text-align:center;color:black;">Update Profile : </h4></center><br><br>
					
						<div class="form-body">
							<center><form method="post" style="border:25px solid white; width:300px; height:200; background-color:white;">
								<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>

  <?php
$adminid=$_SESSION['bpmsaid'];
$ret=mysqli_query($con,"select * from tbladmin where ID='$adminid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
							 <div class="form-group"> <label for="exampleInputEmail1">Admin Name</label> &nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" class="form-control" id="adminname" name="adminname" placeholder="Admin Name" value="<?php  echo $row['AdminName'];?>"> </div> <div class="form-group"> 
							 <br><label for="exampleInputPassword1">User Name</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" id="username" name="username" class="form-control" value="<?php  echo $row['UserName'];?>" readonly="true"> </div>
							 <div class="form-group"> <br><label for="exampleInputPassword1">Contact Number</label> <input type="text" id="contactnumber" name="contactnumber" class="form-control" value="<?php  echo $row['MobileNumber'];?>"> </div>
							 <div class="form-group"> <br><label for="exampleInputPassword1">Email address</label> &nbsp&nbsp&nbsp&nbsp<input type="email" id="email" name="email" class="form-control" value="<?php  echo $row['Email'];?>" readonly='true'> </div>  
							  <br><br><button type="submit" name="submit" class="btn btn-default" style="background-color:pink;padding:5px;border-radius:40px;font-size:15px;width:120px;">Update</button> </form> </center>
						</div>
						<?php } ?>
					</div>
				
				
			</div>
		</div>
		 <?php include_once('includes/footer.php');?>
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
<?php } ?>