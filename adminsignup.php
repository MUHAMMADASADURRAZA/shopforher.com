<?php
session_start();

?>
<?php
include("connect.php");
if(isset($_POST['adminsignup']))
{
$user_name = $_POST['admin_username'];
$user_password = $_POST['admin_password'];




$check_user="SELECT * FROM `admin` WHERE admin_username='$user_name'";
    $run_query=mysqli_query($conn,$check_user);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Customer is already exist, Please try another one!')</script>";
 echo"<script>window.open('indexer.php','_self')</script>";
exit();
    }
 
$saveaccount="INSERT INTO `admin`(`admin_username`, `admin_password`) VALUES ('$user_name','$user_password')";
mysqli_query($conn,$saveaccount);
echo "<script>alert('Data successfully saved, You may now login!')</script>";				
echo "<script>window.open('indexer.php','_self')</script>";


				
	
			
		
	
		

}

?>
