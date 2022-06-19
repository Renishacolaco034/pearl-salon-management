<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
    $sername=$_POST['sername'];
    $cost=$_POST['cost'];
   

     
    $query=mysqli_query($con, "insert into  tblservices(ServiceName,Cost) value('$sername','$cost')");
    if ($query) {
    	echo "<script>alert('Service has been added.');</script>"; 
    		echo "<script>window.location.href = 'add-services.php'</script>";   
    $msg="";
  }
  else
    {
    echo "<script>alert('Something Went Wrong. Please try again.');</script>";  	
    }

  
}
  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>BPMS | Add Services</title>
<body style="background-image: url(images/bg-1.jpg);">

	 <?php include_once('includes/header.php');?>
		
		<div ><br><br><br><br><br><br>
			<center><form method="post"  style="border:25px solid white; width:300px; height:200; background-color:white;">
					<h3 style="font-size:35px ;text-align:center;color:black;">Add Services</h3><br><br>
					<div > 
						
							<form method="post"  style="border:25px solid white; width:400px; height:300px; background-color:white;">
								<p > <?php if($msg){
    echo $msg;
  }  ?> </p>

  
							 Service Name <input type="text"  name="sername"  value="" required="true"> <br><br><br>
							 Cost &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp<input type="number" name="cost" value="" required="true"> <br><br><br>
							
							  <button type="submit" name="submit" style="background-color:pink;padding:5px;border-radius:40px;font-size:15px;width:120px;">Add</button> </form> 
						</div>
						</form></center>
					</div>
				
				
			</div>
		</div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>	 
</body>
</html>
<?php } ?>