<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
   $mobilenum=$_POST['mobilenum'];
    
 
     
    $query=mysqli_query($con, "insert into  tblcustomers(Name,Email,MobileNumber) value('$name','$email','$mobilenum')");
    if ($query) {
echo "<script>alert('Customer has been added.');</script>"; 
echo "<script>window.location.href = 'add-customer.php'</script>"; 
 } else {
echo "<script>alert('Something Went Wrong. Please try again.');</script>";  	
} }
  ?>
<!DOCTYPE HTML>
<html>
<head>
<body style="background-color:pink;">
<title> Add Services</title>





		 
	 <?php include_once('includes/header.php');?>
		
		<div align="center">
			<div>
				<div>
					<h1 align="center">Add Stylish</h1><br>
					<div> 
						
						<div>
							<form method="post" style="border:25px solid white; width:300px; height:200; background-color:white;">
								<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>

  
							 <div> <label for="exampleInputEmail1">Name</label> &nbsp &nbsp <input type="text"  id="name" name="name" placeholder="Full Name" value="" required="true"> </div> 
							 <div> <label for="exampleInputPassword1">Email</label>&nbsp &nbsp &nbsp <input type="email" id="email" name="email"  placeholder="Email" value="" required="true"> </div>
							 <div> <label for="exampleInputEmail1">Mobile</label> &nbsp &nbsp  <input type="tel"  name="mobilenum" required="true" min="10" maxlength="10" pattern="[0-9]{10}" </div>
							 
							
							 	
							 <br> <button type="submit" name="submit"><h2>Add</h2></button> </form> 
						</div>
						
					</div>
				
				
			</div>
		</div>
		 
	</div>
	<!-- Classie -->
		
</body>
</html>
<?php } ?>