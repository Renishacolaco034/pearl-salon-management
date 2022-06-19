<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
  	$bpmsaid=$_SESSION['bpmsaid'];
     $pagetitle=$_POST['pagetitle'];
$pagedes=$_POST['pagedes'];
$email=$_POST['email'];
$mobnumber=$_POST['mobnumber'];
$timing=$_POST['timing'];
     
    $query=mysqli_query($con,"update tblpage set PageTitle='$pagetitle',Email='$email',MobileNumber='$mobnumber',Timing='$timing',PageDescription='$pagedes' where  PageType='contactus'");
    if ($query) {
    $msg="Contact Us has been updated.";
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
<title>BPMS | Contact Us</title>
<body style="background-image: url(images/bg-1.jpg);">
 
		  <?php include_once('includes/header.php');?>
		
					<h3 >Update Contact Us</h3>
					
							<h4>Update Contact Us:</h4>
						
							<form method="post">
								<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
  <?php
 
$ret=mysqli_query($con,"select * from  tblpage where PageType='contactus'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

  
							 <div class="form-group"> <label for="exampleInputEmail1">Page Title</label> <input type="text" class="form-control" name="pagetitle" id="pagetitle" value="<?php  echo $row['PageTitle'];?>" required="true"> </div><div class="form-group"> <label for="exampleInputEmail1">Email</label> <input type="text" class="form-control" name="email" id="email" value="<?php  echo $row['Email'];?>" required="true"> </div><div class="form-group"> <label for="exampleInputEmail1">Mobile Number</label> <input type="text" class="form-control" name="mobnumber" id="mobnumber" value="<?php  echo $row['MobileNumber'];?>" required="true"> </div><div class="form-group"> <label for="exampleInputEmail1">Timing</label> <input type="text" class="form-control" name="timing" id="timing" value="<?php  echo $row['Timing'];?>" required="true"> </div> <div class="form-group"> <label for="exampleInputPassword1">Page Description</label> <textarea name="pagedes" id="pagedes" rows="5" class="form-control">
        <?php  echo $row['PageDescription'];?></textarea> </div>
							 <?php } ?>
						
</body>
</html>
<?php } ?>