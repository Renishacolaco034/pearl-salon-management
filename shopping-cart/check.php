<?php 

session_start();
error_reporting(0);

if(isset($_POST['submit']))
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
	$pmode=$_POST['pmode'];
    $phone=$_POST['phone'];
    $ordnumber = mt_rand(100000000, 999999999);
    $query=mysqli_query($con,"insert into orders(ordnumber,name,email,phone,address,pmode,products,amount_paid) value('$ordnumber','$name','$email',,'$phone','$address','$pmode','$products','$amount_paid')");
    if ($query) {
$ret=mysqli_query($con,"select ordnumber from orders where Email='$email' and  PhoneNumber='$phone'");
$result=mysqli_fetch_array($ret);
$_SESSION['ordnumber']=$result['ordnumber'];
 echo "<script>window.location.href='check.php'</script>";	
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
    <title>Shopping Cart-Thank You</title>
    
  </head>
  <body style=" background:pink">
    <section>
    	<div class="container">
         <marquee   scrollamount="20" behavior="alternate" style="font-size:35px;font-family:italic ;text-align:center;">Thank you for ordering. Your Order no is <br><?php echo $_SESSION['ordnumber'];?> </marquee>
  
</div>  </section><br> 


</body>
</html>





