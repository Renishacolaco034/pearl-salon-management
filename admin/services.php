<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');



  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    

    
    
    </head>
  
	<body style="background-image: url(images/contact.jpg); background-position:right; background-blend-mode:lighten;">
	<section > 
	 <?php include_once('includes/header.php');?>
</section>
    
    
          <div>
            <u><h1 align="center"  style="color:black;font-family:Brush Script MT ;font-size:50px; " class="mb-4">Our Service Prices</h1></u><br>
            <p align="center" style="color:purple;font-style:italic;font-size:20px;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p><br>
          </div>
        <div align="center" style="vertical-align:bootom">
            <table border="1px" height="700" width="1200" style="color:black ;border:2px solid black;font-size:17px;"> <thead> 
			<tr align="center"> <th>#</th> <th align="center">Service Name</th> <th align="center">Service Price</th> </tr> </thead> <tbody>
<?php
$ret=mysqli_query($con,"select *from  tblservices");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

             <tr align="center"> <th scope="row"><?php echo $cnt;?></th> 
			 <td align="center"><?php  echo $row['ServiceName'];?></td> 
			 <td align="center"><?php  echo $row['Cost'];?></td> </tr>   
			 <?php 
$cnt=$cnt+1;
}
?>
</tbody> </table> 
			</div>
	

    <?php include_once('includes/footer.php');?>
    



  
  </body>
</html>