<?php session_start(); ?>
<?php 
    ob_start();
  if($_SESSION["studentID"]==null)
  {
  header("location:signin.php");
  ob_flush();
  }
  $id=$_SESSION["studentID"];
 
?>
<?php
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


 $sql="select * from register where studentId='$id'";
 $res=mysql_query($sql);
 $row=mysql_fetch_array($res);
 $student = $row['studentId'];
 ?>
 

<?php
include('connect.php');

$about=$_REQUEST['min_month'];
$stipend=$_REQUEST['stipend'];

$requ=$_REQUEST['resume'];
$applyby=$_REQUEST['applyby'];


$loc=$_REQUEST['reason'];


$sql="insert into appliedstudent (`studentId`,`min_month`, `stipend`, `resume`, `applyby`, `reason` )
values( '$student', '$about','$stipend', '$requ','$applyby','$loc' )";
$res=mysqli_query($con,$sql);

if($res >= 1)
{
	
	header('location:student_profile.php');
}
else
{
echo"unsuccessfull";
}
?>