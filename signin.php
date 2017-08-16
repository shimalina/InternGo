<!DOCTYPE HTML>
<html>
<head>
<title>Log In Form</title>
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
          <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0" id="t1" >

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
              <form action="studentafterlogin.php" method="post"  > 
                <input placeholder="Email" name="email" class="user" type="text" required="">
                <input placeholder="Password" name="password" class="pass" type="password" required=""> 
                <span><input type="checkbox" name="Remember">Remember Me</span>
                <div class="sign-up">
                  <input type="submit" name="slogin" value="Sign In"/>
                </div>
              </form>
              <h3 class="wow" ><a href="#"> Forgot your password or Email ?</a></h3>
              <br>
              <div class="wow" ><p style="color:white;">Not Registered <a href="signup.php">Sign Up</a></p></div>
            </div>

          </div>
          <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1" id="t2" >
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
              <form action="companyafterlogin.php" method="post" > 
                <input placeholder="Email" name="cemail" class="user" type="text" required="">
                <input placeholder="Password" name="cpassword" class="pass" type="password" required=""> 
                <span><input type="checkbox" name="Remember">Remember Me</span>
                <div class="sign-up">
                  <input type="submit" name="login" value="Sign In"/>
                </div>
              </form>
              <h3 class="wow" ><a href="#"> Forgot your password or Email ?</a></h3>
              <br>
              <div class="wow" ><p style="color:white;">Not Registered <a href="signup.php">Sign Up</a></p></div>
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
<script src="js/signin.js" type="text/javascript"></script>
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