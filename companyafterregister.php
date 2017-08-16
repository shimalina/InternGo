<?php
include('connect.php');

$uname=$_REQUEST['uname'];
$email=$_REQUEST['cemail'];
$password=md5($_REQUEST['cpassword']);
$cpassword=md5($_REQUEST['ccpassword']);
$contact=$_REQUEST['contact'];

$pic=$_FILES['pic']['tmp_name'];

$sql="insert into cregister(`uname`,`email`,`password`,`cpassword`,`contact`, `logo`)values('$uname','$email','$password','$cpassword', '$contact' ,'$pic')";
$res=mysqli_query($con,$sql);

if($res >= 1)
{
	move_uploaded_file($_FILES['pic']['tmp_name'] , "Company_logo/$uname.jpg");
	header('location:signin.php');
}
else
{
echo"unsuccessfull";
}
?>