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
echo"here";

if(isset($_POST["slogin"]))
{
	$email=$_POST['email'];
	$password=$_POST['password'];

	
$sql="SELECT * from register where `email`='".$email."' AND `password`='".$password."'";
$res=mysql_query($sql);
$data=mysql_fetch_array($res);

if($data)
{	
	$_SESSION["studentID"]=$data["studentId"];
    $_SESSION["studentname"]=$data["uname"];
	header("location:student_profile.php");
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