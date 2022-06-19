<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact us</title>
    
    
    
    
  </head>
   <body style="background-image: url(images/rose.jpg);">
	   <?php include_once('includes/header.php');?>

   
    
    
          <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

          <u><h3 align="center"  style="color:black; font-size:50px; font-family:Brush Script MT ;" class="mb-4">
		  <span ><?php  echo $row['PageTitle'];?></span></h3></u><br><br>
		<div >  <div style="margin-left:8%;">
		 <br> <img  src="images/address-1.jpg" height="50px" width="50px" style="margin-left:8%;"  />
          		<h3 >Address</h3><br>
	            <p><?php  echo $row['PageDescription'];?></p>
	          
         </div>
		  <div style="margin-left:35%;margin-top:-4%;">
		  <img  src="images/phone-1.jpg" height="50px" width="50px" style="margin-left:8%"  />
          		<h3>Contact Number</h3><br>
	            <p><a href="tel://1234567920">+ <?php  echo $row['MobileNumber'];?></a></p>
	       </div>
		 <div style="margin-left:60%;margin-top:-4%;"> 
		 <img  src="images/mail-1.jpg" height="50px" width="50px" style="margin-left:8%"  />
          		<h3>Email Address</h3><br>
	            <p><a href="mailto:info@yoursite.com"><?php  echo $row['Email'];?></a></p>
	        </div>
			 <div style="margin-left:85%;margin-top:-4%;">  
			 <img  src="images/tim.jpg" height="50px" width="50px" style="margin-left:8%"  />
          		<h3>Timing</h3><br>
	            <p><?php  echo $row['Timing'];?></p>
				<br>
	          </div>  
			  
          <?php } ?>
       
			
	

    <?php include_once('includes/footer.php');?>
    </div>
  </body>
</html>