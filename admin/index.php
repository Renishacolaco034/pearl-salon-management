<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login']))
  {
    $adminuser=$_POST['username'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select ID from tbladmin where  UserName='$adminuser' && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['bpmsaid']=$ret['ID'];
     header('location:dashboard.php');
    }
    else{
    $msg="Invalid Details.";
    }
  }
  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Admin Login Page </title>


</head> 
 <body  style="background-image: url(images/image_1.jpg);background-repeat:no-repeat;  width:90%; height:100%;	 background-size:100% 100%;">
 <br><br><br>
	<div class="main-content">
		<center><h3 style="font-size:35px;font-family:italic ;text-align:center;color:black;">SignIn Page</h3>
				
						<h4 style="font-size:30px;font-family:italic ;text-align:center;color:black;">Welcome back to AdminPanel ! </h4></center><br><br>
		<center><form role="form" method="post" action="" style="border:25px solid white; width:300px; height:200; background-color:white;">
				<h3 style="font-size:28px;font-family:italic ;text-align:center;">Admin Login</h3>
					<hr>
							<p style="font-size:16px; color:red" align="center"> 
							<?php if($msg){
									echo $msg;
											}  ?>
  </p>
							USERNAME  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" class="user" name="username"  required="true"><br><br><br>
							PASSWORD &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							<input type="password" name="password" class="lock"  required="true"><br><br><br><br>
							<input type="submit" name="login" value="Sign In"  style="background-color:pink;padding:5px;border-radius:40px;font-size:15px;width:120px;"><br><br>
							
									<a href="../index.php" style="text-decoration:none;font-size:18px;float:right;">Back to Home</a><br>
								<br>
								
						
									<a href="forgot-password.php" style="text-decoration:none;font-size:18px;float:right;">Forgot Password?</a><br>
								
								
						</form></center>
						<br><br><br>
					</div>
			
	</body>
</html>