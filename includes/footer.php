 <?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<head>
<link rel="stylesheet" href="includes/stylef.css">
</head>
<br>
 <footer class="footer">
      
          
		  
		  <div  class="footer-1">
		  <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		  <h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		  PBPS</h2><br>
     <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
              <p >Our main focus is on quality and hygiene. Our Parlour is well equipped <br>                 
			  with advanced technology equipments and provides best quality services.<br>
			  Our staff is well trained and experienced, offering advanced services in <br>
			  Skin, Hair and Body Shaping that will provide you with a luxurious <br>
			  experience that leave you feeling relaxed and stress free. <br> 
			  The specialities in the parlour are, apart from regular bleachings<br>
			  and Facials, many types of hairstyles, Bridal and cine make-up and<br>
			  different types of Facials &amp; fashion hair colourings.</p><?php } ?>
            
            </div>
 
         
          <div class="footer-2" style="margin-top:-15%">
             
              <h2 >Links</h2><br>
              <ul>
                <li ><a href="index.php" style="color:gray" ><h3>Home</h3></a></li><br>
                <li><a href="about.php" style="color:gray"><h3>About</h3></a></li><br>
                <li><a href="services.php" style="color:gray"><h3>Services</h3></a></li><br>
                <li><a href="contact.php" style="color:gray"><h3>Contact</h3></a></li><br>
                <li><a href="admin/index.php" style="color:gray"><h3>Admin</h3></a></li>
               
              </ul>
            </div>
          
          
            <div  class="footer-3"  style="margin-top:-17%">
            	<h2>Have a Questions?</h2><br>
            	
                <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
	              <ul>
	                <li><span class="icon icon-map-marker"></span><br> <span class="text"  style="color:gray" ><?php  echo $row['PageDescription'];?></span></li><br>
	                <li><a href="#"><span class="icon icon-phone"></span><br><span class="text"  style="color:gray">+<?php  echo $row['MobileNumber'];?></span></a></li><br>
	                <li><a href="#"><span class="icon icon-envelope"></span><br><span class="text" style="color:gray"><?php  echo $row['Email'];?></span></a></li><br>
	              </ul>
	           
               <?php } ?>
            </div>
        

          
    </footer>