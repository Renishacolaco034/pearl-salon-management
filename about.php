<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>About Us</title>
    
    
   
  </head>
  <body style="background-image: url(images/bg1.jpg);">
	  <?php include_once('includes/header.php');?>
    
           
          
    <br>
    
					
					
						<?php

$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
	          <section>
			  <div>
			  <div>
	          
	          	<u><h3 align="center"  style="color:s; font-size:50px; font-family:Brush Script MT ;" class="mb-4"><span class="subheading"><?php  echo $row['PageTitle'];?></span></h3></u>
				<br><br><br>
	           <img  src="images/about.jpg" height="450px" width="500px" style="margin-left:8%" class="feature-img-1" />
	        </div>
			<div style="margin-left:45%;margin-top:-30% ;">
	          
							<p style=" font-size:36px;font-family:Brush Script MT ;"><br> Our main focus is on quality and hygiene.
							Our Parlour is well equippedwith advanced
							technology equipments and provides best quality
							services. Our staff is well trained and experienced,
							offering advanced services in Skin, Hair and Body Shaping
							that will provide you with a luxurious experience that
							leave you feeling relaxed and stress free. The specialities
							in the parlour are, apart from regular bleachings and Facials,
							many types of hairstyles, Bridal and cine make-up and different
							types of Facials &amp; fashion hair colourings.</p>
						<br><br><br><br><br><br><br><br>	
						
						<?php } ?>
						</div></div>
					
		<br>

  </body>
   <?php include_once('includes/footer.php');?>
  

 
    

</html>