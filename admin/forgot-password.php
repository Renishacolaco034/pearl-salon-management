<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['submit']))
  {
    $contactno=$_POST['contactno'];
    $email=$_POST['email'];

        $query=mysqli_query($con,"select ID from tbladmin where  Email='$email' and MobileNumber='$contactno' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['contactno']=$contactno;
      $_SESSION['email']=$email;
     header('location:reset-password.php');
    }
    else{
      $msg="Invalid Details. Please try again.";
    }
  }
  ?>
<!DOCTYPE HTML>
<html>
<head>

<title>ADMIN | Forgot Page </title>
<body  style="background-image: url(images/bg-1.jpg);background-repeat:no-repeat;  width:90%; height:100%;	 background-size:100% 100%;">
<center><h3 style="font-size:35px;font-family:italic ;text-align:center;color:white;">Forgot Page</h3>
				
						<h4 style="font-size:30px;font-family:italic ;text-align:center;color:white;">Welcome back to  AdminPanel ! </h4></center>
				<br><br>
						<center><form role="form" method="post" action="" style="border:25px solid white; width:300px; height:200; background-color:white;">
						<h3 style="font-size:28px;font-family:italic ;text-align:center;">Reset Password</h3>
						<hr>
	<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
							EMAIL &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="email" class="lock"  required="true"><br><br><br>
							
							PHONE &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="contactno" class="lock"  required="true" maxlength="10" pattern="[0-9]+">
							<br><br>
							<input type="submit" name="submit" value="Reset" style="background-color:pink;padding:5px;border-radius:40px;font-size:15px;width:120px;">
							<br>
							<div class="forgot-grid">
								
								<br><div class="forgot">
									<br><a href="index.php" style="text-decoration:none;font-size:18px;float:center;">Already have an account</a>
								</div>
								
							</div>
						</form>
					
		<br><br><br><br><br><br><br><br><br>
	
</body>
</html>