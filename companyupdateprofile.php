
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Profile</title>
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
 
<?php
 if(isset($_REQUEST['submit']))
  {
  if($_REQUEST['uname']==""){?>
    <script>
        alert("Please Enter Your Comapny Name");    
    </script>
        <?php
  }
  else if($_REQUEST['email']==""){?>
    <script>
        alert("Please Enter Your Email-id");      
        </script>
                <?php
  }
  

  else if($_REQUEST['website']==""){?>
    <script>
        alert("Please Enter Your Website");      
        </script>
                <?php
  }


  else if($_REQUEST['AboutCompany']==""){?>
    <script>
        alert("Please Enter About Company");      
        </script>
                <?php
  }



  else if($_REQUEST['contact']=="" || !is_numeric($_REQUEST['contact'])){?>
    <script>
        alert("Please Enter a valid Contact number");
    </script>
                <?php
  }



  else
  {
  $_sql=mysql_query("UPDATE cregister SET uname='".$_REQUEST['uname']."',email='".$_REQUEST['email']."',contact='".$_REQUEST['contact']."',website='".$_REQUEST['website']."', AboutCompany='".$_REQUEST['AboutCompany']."' WHERE id='$id'");
  $_SESSION["companyname"]=$_REQUEST['uname'];  
?>  
    <script>
        alert("Updation has been done successfully");
        window.location="company_profile.php";
    </script> 
<?php
   }
 }
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
          <a class="dropdown-toggle glyphicon glyphicon-user" data-toggle="dropdown" href="#"><?php echo $row['uname'] ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">


            <li><a href="#">Profile</a></li>
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
  
<div class="container">
  <div class="row">
    <div class="col-md-2">
   </div>
   <div class="col-md-6">
    <form action="" method="post" id="form" enctype="multipart/form-data">
       <table class="table" align="center" cellpadding="5px" cellspacing="0px">
        <tr>
         <td>
          <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Edit Profile</span>
          </div>
         </td>
        </tr>
        <tr>
         <td>
          <div class="input-group">
           <span class="input-group-addon" id="basic-addon1"  >Name:</span>
           <input type="text" id="name" class="form-control" placeholder="name" aria-describedby="basic-addon1" name="uname" value="<?php 
      if(isset($_REQUEST['uname']))
      echo $_REQUEST['uname']; 
      else
      echo $row['uname']; 
      ?>">      
          </div>
         </td>
        </tr>
        <tr>
         <td>
          <div class="input-group">
          <span class="input-group-addon" id="basic-addon1" >Email-id:</span>
          <input type="email" class="form-control" placeholder="Email-id" aria-describedby="basic-addon1" name="email" value="<?php 
      if(isset($_REQUEST['email']))
      echo $_REQUEST['email']; 
      else
      echo $row['email']; 
      ?>">
          </div>
         </td>
        </tr>
       
        <tr>
         <td>
          <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Contact number:</span>
           <input type="text" class="form-control" placeholder="Contact number" aria-describedby="basic-addon1" name="contact" value="<?php 
      if(isset($_REQUEST['contact']))
      echo $_REQUEST['contact']; 
      else
      echo $row['contact']; 
      ?>">
          </div>
         </td>
        </tr>

        <tr>
         <td>
          <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Website:</span>
           <input type="text" class="form-control" placeholder="Website" aria-describedby="basic-addon1" name="website" value="<?php 
      if(isset($_REQUEST['website']))
      echo $_REQUEST['website']; 
      else
      echo $row['website']; 
      ?>">
          </div>
         </td>
        </tr>


        <tr>
         <td>
          <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">About Company:</span>
           <input type="text" class="form-control" placeholder="About Company" aria-describedby="basic-addon1" name="AboutCompany" value="<?php 
      if(isset($_REQUEST['AboutCompany']))
      echo $_REQUEST['AboutCompany']; 
      else
      echo $row['AboutCompany']; 
      ?>">
          </div>
         </td>
        </tr>



        <tr>
         <td colspan="2" align="center"><input type="submit" class="btn btn-success" value="Update" name="submit"/></td>
        </tr>
       </table>
      </form>
   </div> 
   <div class="col-md-2">
   </div> 
  </div>
  
</div>

</body>
</html>

