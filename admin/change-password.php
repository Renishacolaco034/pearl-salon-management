<?php
session_start();
include('includes/dbconnection.php');
error_reporting(0);
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{
if(isset($_POST['submit']))
{
$adminid=$_SESSION['bpmsaid'];
$cpassword=md5($_POST['currentpassword']);
$newpassword=md5($_POST['newpassword']);
$query=mysqli_query($con,"select ID from tbladmin where ID='$adminid' and   Password='$cpassword'");
$row=mysqli_fetch_array($query);
if($row>0){
$ret=mysqli_query($con,"update tbladmin set Password='$newpassword' where ID='$adminid'");
$msg= "Your password successully changed"; 
} else {

$msg="Your current password is wrong";
}



}

  
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Change Password</title>

<script type="text/javascript">
function checkpass()
{
if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
{
alert('New Password and Confirm Password field does not match');
document.changepassword.confirmpassword.focus();
return false;
}
return true;
} 

</script>
</head> 
<body bgcolor="pink">
	<div>
	                <center><h3 style="font-size:35px;font-family:italic ;text-align:center;color:black;">Change Password</h3>
					
					
						<h4 style="font-size:35px;font-family:italic ;text-align:center;color:black;">Reset Your Password : </h4></center><br>
						
							
						</div>
						<div >
							<center><form method="post" name="changepassword" onsubmit="return checkpass();" action="" style="border:25px solid white; width:300px; height:200; background-color:white;">
								<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>

  <?php
$adminid=$_SESSION['bpmsaid'];
$ret=mysqli_query($con,"select * from tbladmin where ID='$adminid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
							 <div> <label for="exampleInputEmail1">Current Password</label> <input type="password" name="currentpassword" class="form-control" required= "true" value=""> </div> <div class="form-group">
							 <br><label for="exampleInputPassword1">New Password</label> &nbsp&nbsp&nbsp&nbsp<input type="password" name="newpassword" class="form-control" value="" required="true"> </div>
							 <br><div > <label for="exampleInputPassword1">Confirm Password</label> <input type="password" name="confirmpassword" class="form-control" value="" required="true"> </div>
							  <br><br>
							  <button type="submit" name="submit" class="btn btn-default" style="background-color:pink;padding:5px;border-radius:40px;font-size:15px;width:120px;">Change</button> </form> </center>
						</div>
						<?php } ?>
					</div>
				
				
			</div>
		
	
</body>
</html>
<?php } ?>