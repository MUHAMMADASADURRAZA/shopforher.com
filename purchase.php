<?php
session_start();

?>
<?php
include("connect.php");
if(isset($_POST['purchase']))
{
$user_full = $_POST['fullname'];
$user_pno= $_POST['phone_no'];
$user_add = $_POST['address'];
$user_bd = $_POST['birthday'];
$user_ctg = $_POST['Category'];



 
$saveaccount="INSERT INTO `placeorder`(`fullname`, `phone_no`, `address`, `birthday`, `Category`) VALUES ('$user_full','$user_pno','$user_add','$user_bd','$user_ctg ')";
mysqli_query($conn,$saveaccount);
echo "<script>alert('your order has been successfully placed')</script>";				
echo "<script>window.open('index.php','_self')</script>";


				
	
			
		
	
		

}

?>
