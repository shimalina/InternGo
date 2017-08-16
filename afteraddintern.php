<?php
include('connect.php');


$about=$_REQUEST['about'];
$requ=$_REQUEST['require'];
$start_date=$_REQUEST['start_date'];
$applyby=$_REQUEST['applyby'];

$category=$_REQUEST['category'];
$duration=$_REQUEST['duration'];
$loc=$_REQUEST['location'];
$stipend=$_REQUEST['stipend'];

$sql="insert into internship(`about`,`requireInt`, `start_date`, `category`, `duration`, `location`, `stipend`, `applyby` )
values('$about','$requ','$start_date','$category', '$duration','$loc', '$stipend', '$applyby')";
$res=mysqli_query($con,$sql);

if($res >= 1)
{
	
	header('location:company_profile.php');
}
else
{
echo"unsuccessfull";
}
?>