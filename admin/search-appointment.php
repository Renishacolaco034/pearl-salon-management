<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{



  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>BPMS || Search Appointment</title>


</head> 
<body style="background-color:pink";>
	<div>
		
		 <?php include_once('includes/header.php');?>
		
		<div>
			<div>
				<div>
					<h3 align="center">Search Appointment</h3>
					
					
				
					<div>
						
	<div align="center">
							<form method="post" name="search" action=""  style="border:25px solid white; width:300px; height:200; background-color:white;">
							
								<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>

  
							 <div align="center"> <label for="exampleInputEmail1">Search by Appointment Number</label> <input id="searchdata" type="text" name="searchdata" required="true" class="form-control">
						
							<br><br>
							  <button type="submit" name="search" style="background-color:pink;padding:5px;border-radius:40px;font-size:15px;width:120px;" >Search</button> </form> 
						</div><br><br>

<?php
if(isset($_POST['search']))
{ 

$sdata=$_POST['searchdata'];
  ?>
  <h4 align="center">Result against "<?php echo $sdata;?>" keyword </h4> <br>

						<div align="center"><table border="2" width="900px" height="100px"> <thead> <tr> <th>#</th> <th> Appointment Number</th> <th>Name</th><th>Mobile Number</th> <th>Appointment Date</th><th>Appointment Time</th><th>Action</th> </tr> </thead> <tbody>
<?php
$ret=mysqli_query($con,"select *from  tblappointment where AptNumber like '%$sdata%' || Name like '%$sdata%' || PhoneNumber like '%$sdata%'");
$num=mysqli_num_rows($ret);
if($num>0){
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

						 <tr> <th scope="row"><?php echo $cnt;?></th> <td><?php  echo $row['AptNumber'];?></td> <td><?php  echo $row['Name'];?></td><td><?php  echo $row['PhoneNumber'];?></td><td><?php  echo $row['AptDate'];?></td> <td><?php  echo $row['AptTime'];?></td> <td><a href="view-appointment.php?viewid=<?php echo $row['ID'];?>">View</a></td> </tr>   <?php 
$cnt=$cnt+1;
} } else { ?>
  <tr>
    <td colspan="8"> No record found against this search</td>

  </tr>
   
<?php } }?></tbody> </table> 
					</div>
				</div>
			</div>
		</div>
		</div>
		
	</div>

</body>
</html>
<?php }  ?>