<?php 
ob_start();
session_start();
$host="localhost";
$user="root";
$password="";
$con=mysql_connect($host,$user,$password);
if(!$con)
{
	echo ("Unable to connect");
    exit;
}
$db=mysql_select_db("interngo");
if(!$db)
{
	echo("Unable to connect database..");
	exit;
}
if(isset($_POST["login"]))
{
	$email=$_POST['cemail'];
	$password=$_POST['cpassword'];

	
$sql="SELECT * from cregister where `email`='".$email."' AND `password`='".$password."'";
$res=mysql_query($sql);
$data=mysql_fetch_array($res);

if($data)
{	
	$_SESSION["companyID"]=$data["id"];
    $_SESSION["companyname"]=$data["uname"];
	header("location:company_profile.php");
	ob_flush();
}
else
{?>
   <script>
				alert("You entered invalid password or email-id");
				window.location="signin.php";
   </script>
            <?php
}
}
?>