<?php
include('connect.php');

$uname=$_REQUEST['suname'];
$email=$_REQUEST['semail'];
$password=md5($_REQUEST['spassword']);
$cpassword=md5($_REQUEST['scpassword']);

$sql="insert into register(`uname`,`email`,`password`,`cpassword`)values('$uname','$email','$password','$cpassword')";
$res=mysqli_query($con,$sql);

if($res >= 1)
{
	
	header('location:signin.php');
}
else
{
echo"unsuccessfull";
}
?>