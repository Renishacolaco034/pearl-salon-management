<?php
session_start();
error_reporting(0);

  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Thank You</title>
    
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="includes/style.css">
  </head>
  <body style=" background:pink">
	   <?php include_once('includes/header.php');?>
            
    
    <section >
    	<div>
         <marquee bgcolor="white"  scrollamount="20" behavior="alternate" style="font-size:35px;font-family:italic ;text-align:center;">Thank you for applying. Your Appointment no is <br><?php echo $_SESSION['aptno'];?> </marquee>
  <center>     
 <div>
  <div>
  <img src="images/work-1.jpg" width="250px" height="350px">
  


  <img src="images/work-2.jpg" width="250px" height="350px">
  


  <img src="images/work-3.jpg" width="250px" height="350px">
  

  <img src="images/work-4.jpg" width="250px" height="350px">
  
</div>
</div>
<div>
  <div>
  <img src="images/work-5.jpg" width="250px" height="350px">
  

  <img src="images/work-6.jpg" width="250px" height="350px">
  

  <img src="images/work-7.jpg" width="250px" height="350px">
  

  <img src="images/work-8.jpg" width="250px" height="350px">
  
</div>
</div>
</div></center>   </section><br> 

<?php include_once('includes/footer.php');?>
</body>
</html>




