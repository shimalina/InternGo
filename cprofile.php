
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Company Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/profile.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>


<?php session_start(); ?>
<?php 
    ob_start();
  if($_SESSION["companyID"]==null)
  {
  header("location:signin.php");
  ob_flush();
  }
  $id=$_SESSION["companyID"];
 
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


 $sql="select * from cregister where id='$id'";
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
          <a class="dropdown-toggle glyphicon glyphicon-user" data-toggle="dropdown" href="company_profile.php"><?php echo $row['uname'] ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">


            <li><a href="cprofile.php">Profile</a></li>
            <li><a href="companyupdateprofile.php">Update Profile</a></li>
             <li><a href="addintern.php">Add Internship</a></li>
            <li><a href="listofintern.php">Applied Intern</a></li>
             <li><a href="companylogout.php">Log Out</a></li>
       </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>
  
<div class="container"  >
  <font style="color:black;font-size:30px;font-weight:bolder;">
    <center>
    <h1> <?php echo $_SESSION['companyname'] ?>!!!</h1></font>
    <br>
    <?php
    $i=$row['uname'];

    ?>
    <center><?php echo "<img src='Company_logo/$i.jpg' height='128px' width='128px' />"; ?> </center>
  </center>
    <br>
<div class="ccontent">
    <div class="row">
      <div class="col-md-4">
        <h4><b>About Company:</b></h4>
      </div>
      <div class="col-md-8"></div>
      <h4><?php echo $row['AboutCompany'] ?>!!!</h4>
    </div>

     <div class="row">
      <div class="col-md-4">
        <h4><b>Website:</b></h4>
      </div>
      <div class="col-md-8"></div>
     <h4> <?php echo $row['website'] ?>!!!</h4>
    </div>

     <div class="row">
      <div class="col-md-4">
        <h4><b>Contact:</b></h4>
      </div>
      <div class="col-md-8"></div>
      <h4><?php echo $row['contact'] ?>!!!</h4>
    </div>
    
     </div>
  
</div>

</body>
</html>

