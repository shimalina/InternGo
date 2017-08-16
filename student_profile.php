
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Profile Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/profile.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>


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
 
 ?>
 

</head>
<body>
<?php include("header.php"); ?>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
       
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Internship <span class="caret"></span></a>
          <ul class="dropdown-menu">


            <li><a href="#">Computer Science</a></li>
            <li><a href="#">Mechanical</a></li>
            <li><a href="#">Electrical</a></li>
            <li><a href="#">Media</a></li>
            <li><a href="#">Business</a></li>
            <li><a href="internship.php">Search More</a></li>
           


          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Training <span class="caret"></span></a>
          <ul class="dropdown-menu">


           <li><a href="#">Java</a></li>
                        <li><a href="#">C/C++</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Hacking</a></li>
                        <li><a href="#">Assembly Language</a></li>
                        <li><a href="#">Robotics</a></li>
                        <li><a href="workshop.php">Search More</a></li>
           


          </ul>
        </li>

        <li><a href="contactus.php">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       
        

        <li class="dropdown">
          <a class="dropdown-toggle glyphicon glyphicon-user" data-toggle="dropdown" href=""><?php echo $row['uname'] ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">


            <li><a href="student_profile.php">Profile</a></li>
           
             <li><a href="studentlogout.php">Log Out</a></li>
       </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>
  
<div class="container">
  <font style="color:black;font-size:20px;font-weight:bolder;"><center><h1>Welcome</h1><br> <?php echo $_SESSION['studentname'] ?>!!!</center></font>   

  <div><center>
   <form action="apply.php">
    <input type="submit" value="Go to Apply">
</form>
      </center></div>
  <!--
  <div>
  	<h2>List of applied internship</h2>
  </div>
-->
</div>

</body>
</html>

