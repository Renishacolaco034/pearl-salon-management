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
   
 $eid=$_GET['editid'];
     
    $query=mysqli_query($con, "update  tblservices set ServiceName='$sername',Cost='$cost' where ID='$eid' ");
    if ($query) {
    $msg="Service has been Updated.";
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
<title>BPMS | Update Services</title>
<body style="background-image: url(images/bg-1.jpg);" >
	 <?php include_once('includes/header.php');?>
		<!-- //header-ends -->
		<!-- main content start-->
					<h3  style="font-size:35px ;text-align:center;color:black;">Update Services</h3><br><br>
		
						<div class="form-body">
							<center><form method="post"  style="border:25px solid white; width:300px; height:200; background-color:white;">
								<p style="font-size:16px; color:red ; background-color:cyan;" ><?php if($msg){
    echo $msg;
  }  ?> </p>
  <?php
 $cid=$_GET['editid'];
$ret=mysqli_query($con,"select * from  tblservices where ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?> 

  
							Service Name
							 <input type="text" class="form-control" id="sername" name="sername"  value="<?php  echo $row['ServiceName'];?>" required="true"> <br><br><br>
							 
							Cost &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp<input type="text" id="cost" name="cost" class="form-control"  value="<?php  echo $row['Cost'];?>" required="true"> 
							 <?php } ?>
							<br><br>  <button type="submit" name="submit" style="background-color:pink;padding:5px;border-radius:40px;font-size:15px;width:120px;">Update</button> </form> 
						</div>
						
					
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>		
</body>
</html>
<?php } ?>