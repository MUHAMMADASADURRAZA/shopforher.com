<?php
session_start();

?>
<?php
include("connect.php");
if(isset($_POST['contactus']))
{
$user_name = $_POST['name'];
$user_email = $_POST['email'];
$user_subject = $_POST['subject'];

$user_company= $_POST['company'];
$user_message = $_POST['message'];


$check_user="SELECT * FROM `contactus` WHERE  email='$user_email'";
    $run_query=mysqli_query($conn,$check_user);

 
$saveaccount="INSERT INTO `contactus`( `name`, `email`, `subject`, `company`, `message`) VALUES ('$user_name','$user_email','$user_subject','$user_company','$user_message')";
mysqli_query($conn,$saveaccount);
echo "<script>alert('Thanks for your feedback! We highly appreciate it..')</script>";				
echo "<script>window.open('index.php','_self')</script>";


				
	
			
		
	
		

}

?>
