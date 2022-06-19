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
     
    $query=mysqli_query($con,"update tblpage set PageTitle='$pagetitle',PageDescription='$pagedes' where  PageType='aboutus'");
    if ($query) {
    $msg="About Us has been updated.";
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
<title>BPMS | About Us</title>


</head> 
<body style="background-image: url(images/bg-1.jpg);">
	 <?php include_once('includes/header.php');?>
		
				<div class="forms">
					
					 
						
							<center><form method="post" style="border:25px solid white; width:400px; height:300px; background-color:white;">
							<h3 style="font-size:35px ;text-align:center;color:black;">Update About Us</h3><br><br>
								<p style="font-size:16px; color:red; background-color:cyan; align:center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
  <?php
 
$ret=mysqli_query($con,"select * from  tblpage where PageType='aboutus'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

  
							Page Title &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text"  name="pagetitle" id="pagetitle" value="<?php  echo $row['PageTitle'];?>" required="true"> <br><br>
						 Page Description &nbsp&nbsp&nbsp <textarea name="pagedes" id="pagedes" rows="5" class="form-control">
        <?php  echo $row['PageDescription'];?></textarea> 
							 <?php } ?>
							<br><br>  <button type="submit" name="submit" style="background-color:pink;padding:5px;border-radius:40px;font-size:15px;width:120px;">Update</button> </form> </center>
						</div>
	<br><br><br><br><br><br>					
					
</body>
</html>
<?php } ?>