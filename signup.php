<!DOCTYPE HTML>
<html>
<head>
<title>Register Form</title>
<link href="css/signin_style.css" rel="stylesheet" type="text/css" media="all"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="" />


<body>
  
  <div class="container-fluid">
   
      <div class="main-content">
        <div class="sap_tabs">  
        <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
          <div class="tab">
            <ul>
              <li class="resp-tab-item" id="st" aria-controls="tab_item-0" role="tab"><span>Student</span></li>
              <li class="resp-tab-item" id="cp" aria-controls="tab_item-1" role="tab"><span>Company</span></li>
                
            </ul>
          </div>          
          <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0" id="t1">

            <div id="welcome">
              <h1>Welcome Student!</h1>
            </div>

            <div class="login-top">
              <p>Login with social</p>
              <ul>
                <li><a class="face" href="https://www.facebook.com/w3layouts"><span class="face"> </span>Sign in with Facebook</a></li>
                <li><a class="twit" href="https://twitter.com/w3layouts"><span class="twit"> </span>Sign in with Twitter</a></li>
              </ul>
            </div>
           <div class="register">
              <form action="studentafterregister.php" method="post" enctype="multipart/form-data"> 
                <input placeholder="Username" name="suname" class="user" type="text" required="">
                <input placeholder="Email" name="semail" class="user" type="text" required="">
                <input placeholder="Password" name="spassword" class="pass" type="password" required=""> 
                 <input placeholder="Confirm Password" name="scpassword" class="pass" type="password" required="">
                 
                
                <div class="sign-up">
                  <input type="submit" value="Sign Up"/>
                </div>
              </form>
             
              <br>
              <div class="wow" ><p style="color:white;">Already Registered <a href="signin.php">Sign In</a></p></div>
            </div>

          </div>
          <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1" id="t2">
             <div id="welcome">
              <h1>Welcome Company!</h1>
            </div>
          <div class="login-top">
              <p>Login with social</p>
              <ul>
                <li><a class="face" href="https://www.facebook.com"><span class="face"> </span>Sign in with Facebook</a></li>
                <li><a class="twit" href="https://twitter.com"><span class="twit"> </span>Sign in with Twitter</a></li>
              </ul>
            </div>
            <div class="register">
              <form action="companyafterregister.php" method="post" enctype="multipart/form-data"> 
                 <input placeholder="Company Name " name="uname" class="user" type="text" required="">
                <input placeholder="Email" name="cemail" class="user" type="text" required="">
                <input placeholder="Password" name="cpassword" class="pass" type="password" required=""> 
                 <input placeholder="Confirm Password" name="ccpassword" class="pass" type="password" required=""> 
                 <input placeholder="Contact Number" name="contact" class="pass" type="text" required=""> 
                 <div class="company_logo ">
                  Company Logo
                <input type="file" name="pic" class="user" > 
              </div>
                <div class="sign-up">
                  <input type="submit" value="Sign Up"/>
                </div>
              </form>
             
              <br>
              <div class="wow" ><p style="color:white;">Already Registered <a href="signin.php">Sign In</a></p></div>
            </div>
          </div>                                            
        </div>  
      </div>
    <div class="footer">
      <p>&copy 2016 InternGo . All rights reserved | Design by <a href="#">Priyanka Mahawar</a></p>
    </div>

</div>
    <!---main-->

    <script src="js/jquery.min.js"></script>
    <script src="js/signin.js"></script>

 <script type="text/javascript">
          $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
              type: 'default', //Types: default, vertical, accordion           
              width: 'auto', //auto or any width like 600px
              fit: true   // 100% fit in a container
            });
          });
           </script>
       
</body>
</html>