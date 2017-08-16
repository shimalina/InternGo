<!DOCTYPE HTML>
<html>
<head>
<title>Apply for Internship</title>
<link href="css/addintern.css" rel="stylesheet" type="text/css" media="all"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="" />



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
  
  <div class="container-fluid">
    <div class="main-content">
        <div class="sap_tabs">  
        <div id="welcome">
            <h2>Apply for Internship!</h2>
        </div>
                 
         
        <div class="resp-tab-content" aria-labelledby="tab_item-1">
            <div class="register">
                <form action="afterapply.php" method="post">

                     
                
                   

                <select data-placeholder="Minimum Month" id="min_month" name="min_month" required>
                <option value=""> Select duration </option>
               
                <option value="1%20month">1 Month</option>
                <option value="2%20month">2 Months</option>
                <option value="3%20month">3 Months</option>
                <option value="4%20month">4 Months</option>
                <option value="5%20month">5 Months</option>
                <option value="6%20month">6 Months</option>
                </select>
               
                
                  


                <select data-placeholder="Stipend" id="stipend" name="stipend"  tabindex="2" required>
                <option value="">Expected Stipend </option>
                <option value="2-5k">2-5k</option>
                <option value="6-10k">6-10k</option>
                <option value="10-15k">10-15k</option>
                <option value="16-20k">16-20k</option>
                <option value="more%20than%2020k">More that 20k</option>
               
                </select>
                <div class="star " style="margin-bottom:4%">
                  Resume
                <input style="padding-left:4%" type="file" name="resume" class="user" > 
              </div>
                
                <div class="star" style="margin-bottom:4%">
                        Earliest Start Date  <input style="padding-left:4%" placeholder="" name="applyby" class="user" type="date" required="">  
                    </div>

                <div>
                    <label for="address">Why Should we hire you:</label><br>

                        <textarea name="reason" class="user" rows="4" cols="50" required/></textarea>
                </div>


                <div class="sign-up">
                  <input type="submit" value="Submit"/>
                </div>
                
                
                </form>
             
                <br>
            
            </div> <!--class register finished -- >
          </div>  <!--resp-tab-content finished -- >                                          
        
      </div><!--sap-tabfinished -- >   
      </div> <!-- main-content finished -- >   

    <div class="footer">
      <p>&copy 2016 InternGo . All rights reserved | Design by <a href="#">Priyanka Mahawar</a></p>
    </div>

</div> <!-- container finished -- >   
    

    <script src="js/jquery.min.js"></script>

       
</body>
</html>