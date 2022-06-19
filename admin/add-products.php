<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
    $proname=$_POST['proname'];
   $proprice=$_POST['proprice'];
   $realprice=$_POST['realprice'];
   $proquan=$_POST['proquan'];
   $totalquan=$_POST['totalquan'];
   $proimage=$_POST['proimage'];
   $procode=$_POST['procode'];
   

     
    $query=mysqli_query($con, "insert into  product(product_name,product_price,real_price,product_qty,Total_quantity,product_image,product_code) value
	('$proname','$proprice','$realprice',$proquan,$totalquan,'$proimage','$procode')");
    if ($query) {
    	echo "<script>alert('Product has been added.');</script>"; 
    		echo "<script>window.location.href = 'add-services.php'</script>";   
    $msg="";
  }
  else
    {
    echo "<script>alert('Something Went Wrong. Please try again.');</script>";  	
    }

  
}
  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Add Products</title>
<body style="background-image: url(images/bg-1.jpg);">

	 <?php include_once('includes/header.php');?>
		
		<div ><br>
			<center><form method="post"  style="border:25px solid white; width:25%; height:200; background-color:white;">
					<h3 style="font-size:35px ;text-align:center;color:black;">Add Products</h3><br><br>
					<div > 
						
							<form method="post"  style="border:25px solid white; width:400px; height:300px; background-color:white;">
								<p > <?php if($msg){
    echo $msg;
  }  ?> </p>

  
							 Product Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text"  name="proname"  value="" required="true"> <br><br><br>
							 Product Price &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text"  name="proprice" value="" required="true"> <br><br><br>
							 Real Price &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text"  name="realprice" value="" required="true"> <br><br><br>
							Product Quantity &nbsp&nbsp&nbsp <input type="text"  name="proquan" value="" required="true"> <br><br><br>
							 Total Quantity &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text"  name="totalquan" value="" required="true"> <br><br><br>
							Product Image <input type="file"  name="proimage" value="image/" required="true"> <br><br><br>
							Product Code&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text"  name="procode" value="" required="true"> <br><br><br>
							 
							  <button type="submit" name="submit" style="background-color:pink;padding:5px;border-radius:40px;font-size:15px;width:120px;">Add</button> </form> 
						</div>
						</form></center>
					</div>
				
				
			</div>
		</div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>	 
</body>
</html>
<?php } ?>