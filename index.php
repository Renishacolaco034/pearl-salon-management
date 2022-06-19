<?php 
include('includes/dbconnection.php');
session_start();
error_reporting(0);

if(isset($_POST['submit']))
  {

    $name=$_POST['name'];
    $email=$_POST['email'];
    $services=$_POST['services'];
    $adate=$_POST['adate'];
    $atime=$_POST['atime'];
    $phone=$_POST['phone'];
    $aptnumber = mt_rand(100000000, 999999999);
    $query=mysqli_query($con,"insert into tblappointment(AptNumber,Name,Email,PhoneNumber,AptDate,AptTime,Services) value('$aptnumber','$name','$email','$phone','$adate','$atime','$services')");
    if ($query) {
$ret=mysqli_query($con,"select AptNumber from tblappointment where Email='$email' and  PhoneNumber='$phone'");
$result=mysqli_fetch_array($ret);
$_SESSION['aptno']=$result['AptNumber'];
 echo "<script>window.location.href='thank-you.php'</script>";	
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home Page</title>
      <link rel="stylesheet" type="text/css" href="style.css">

</style>
  </head>
  <body  style="background-image: url(images/bg.jpg);">
  <?php include_once('includes/header.php');?>
  <div class="container">
 <br>
    <section>
		  <div class="content" >
	          	
				<h1 style="margin-top:-11%" class="quote">Get Pretty Look</h1>
			            <p class="quote">We pride ourselves on our high quality work and attention to detail.</p><br><br>
<img  src="images/bg_1.png"  class="feature-img" />

           

<form action="#" method="post" id='login' class='input-group-login' style="border:25px solid white; width:300px; height:90%; background-color:white;">
<h1 style="font-size:25px;font-family:italic ;text-align:center">Make an Appointment</h1><br>
NAME  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" id="name" style="font-family:italic ;" class='form-control'  name="name" required="true" /><br><br>
EMAIL &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <input  type="email" class="form-control" style="font-family:italic ;" id="appointment_email" name="email" required="true" /><br><br>
	SERVICES &nbsp &nbsp 
	<select name="services" id="services" required="true" style="font-family:italic ;width:160px ;" class="form-control">
		                      	<option value="">Select Services</option>
		                      	<?php $query=mysqli_query($con,"select * from tblservices");
              while($row=mysqli_fetch_array($query))
              {
              ?>
		                       <option value="<?php echo $row['ServiceName'];?>"><?php echo $row['ServiceName'];?></option>
		                       <?php } ?> 
		                      </select><br><br>	  	                    
	DATE  &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp  <input type="date"   name="adate" id='adate' required="true" min="<?php echo date("Y-m-d"); ?>" style="font-family:italic ;width:160px ;"> 
	<br><br>
	TIME   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="time"  name="atime" id='atime' required="true" style="font-family:italic ;width:160px ;"><br><br>
	PHONE  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="tel"  id="phone" name="phone" required="true" min="10" maxlength="10" pattern="[0-9]{10}" style="font-family:italic ;"><br><br>
 <input type="submit" name="submit" value="Make an Appointment" class="submit-btn" style="background-color:skyblue; padding:5px;border-radius:40px;font-size:15px;width:170px;">
          
 </form>
</div>
</div>

 


<?php include_once('includes/footer.php');?>



    						
  </body>
</html>