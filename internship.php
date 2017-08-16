
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search Internship</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/search.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

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
       
        

        <li >
          <a class=" glyphicon glyphicon-user" href="signin.php">Sign In</a>
         
        </li>
           <li >
          <a class=" glyphicon glyphicon-user"  href="signup.php">Sign Up</a>
         
        </li>

      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3" id="searchbox">
            
      <div class="search register">

        
        <form action="aftersearch.php" method="post" target="iframe1" >
      <!--  <input type="text" placeholder="Category" name="search"  required=""> -->
        <div>
                <label >Category</label>
                <br>
                <select data-placeholder="Choose category" id="select_category" name="search" >
                <option value=""> Choose category </option>
                <option value=".Net">.NET Development</option>
                <option value="3d%20printing">3D Printing</option>
                <option value="accounts">Accounts</option>
                <option value="acting">Acting</option>
                <option value="aerospace">Aerospace Engineering</option>
                <option value="agriculture%20and%20food%20engineering">Agriculture &amp; Food Engineering</option>
                <option value="analytics">Analytics</option>
                <option value="android">Android App Development</option>
                <option value="angular.js%20development">Angular.js Development</option>
                <option value="animation">Animation</option>
                <option value="architecture">Architecture</option>
                <option value="artificial%20intelligence%20%28ai%29">Artificial Intelligence (AI)</option>
                <option value="asp.net">ASP.NET Development</option>
                <option value="backend%20development">Backend Development</option>
                <option value="biology">Biology</option>
                <option value="biotech">Biotechnology Engineering</option>
                <option value="blogging">Blogging</option>
                <option value="brand%20management">Brand Management</option>
                <option value="cad%20design">CAD Design</option>
                <option value="chartered%20accountancy%20%28ca%29">Chartered Accountancy (CA)</option>
                <option value="chemical">Chemical Engineering</option>
                <option value="chemistry">Chemistry</option>
                <option value="civil">Civil Engineering</option>
                <option value="client%20servicing">Client Servicing</option>
                <option value="commerce">Commerce</option>
                <option value="company%20secretary%20%28cs%29">Company Secretary (CS)</option>
                <option value="computer%20science" >Computer Science</option>
                <option value="computer%20vision">Computer Vision</option>
                <option value="content%20writing">Content Writing</option>
                <option value="copywriting">Copywriting</option>
                <option value="creative%20design">Creative Design</option>
                <option value="creative%20writing">Creative Writing</option>
                <option value="customer%20service">Customer Service</option>
                <option value="data%20entry">Data Entry</option>
                <option value="data%20science">Data Science</option>
                <option value="database%20building">Database Building</option>
                <option value="design">Design</option>
                <option value="digital%20marketing">Digital Marketing</option>
                <option value="editorial">Editorial</option>
                <option value="electronics">Electronics Engineering</option>
                <option value="embedded%20systems">Embedded Systems</option>
                <option value="energy%20science%20and%20engineering">Energy Science &amp; Engineering</option>
                <option value="engineering">Engineering</option>
                <option value="engineering%20design">Engineering Design</option>
                <option value="environmental%20sciences">Environmental Sciences</option>
                <option value="event%20management">Event Management</option>
                <option value="fashion%20design">Fashion Design</option>
                <option value="film%20making">Film Making</option>
                <option value="finance">Finance</option>
                <option value="front%20end%20development">Front End Development</option>
                <option value="full%20stack%20development">Full Stack Development</option>
                <option value="fundraising">Fundraising</option>
                <option value="game%20development">Game Development</option>
                <option value="general%20management">General Management</option>
                <option value="government">Government</option>
                <option value="graphic%20design">Graphic Design</option>
                <option value="hotel%20management">Hotel Management</option>
                <option value="hr">Human Resources (HR)</option>
                <option value="humanities">Humanities</option>
                <option value="image%20processing">Image Processing</option>
                <option value="industrial%20and%20production%20engineering">Industrial &amp; Production Engineering</option>
                <option value="information%20technology">Information Technology</option>
                <option value="instrumentation%20and%20control%20engineering">Instrumentation &amp; Control Engineering</option>
                <option value="interior%20design">Interior Design</option>
                <option value="internet%20of%20things%20%28iot%29">Internet of Things (IoT)</option>
                <option value="ios">iOS App Development</option>
                <option value="java">Java Development</option>
                <option value="javascript%20development">Javascript Development</option>
                <option value="journalism">Journalism</option>
                <option value="law">Law</option>
                <option value="legal%20research">Legal Research</option>
                <option value="machine%20learning">Machine Learning</option>
                <option value="magento%20development">Magento Development</option>
                <option value="market%2Fbusiness%20research">Market/Business Research</option>
                <option value="marketing">Marketing</option>
                <option value="mathematics">Mathematics</option>
                <option value="mba">MBA</option>
                <option value="mechanical">Mechanical Engineering</option>
                <option value="media">Media</option>
                <option value="medicine">Medicine</option>
                <option value="merchandise%20design">Merchandise Design</option>
                <option value="metallurgy">Metallurgical Engineering</option>
                <option value="mobile%20app%20development">Mobile App Development</option>
                <option value="naval%20and%20ocean">Naval Architecture and Ocean Engineeering</option>
                <option value="ngo">NGO</option>
                <option value="node.js%20development">Node.js Development</option>
                <option value="operations">Operations</option>
                <option value="pharmaceutical">Pharmaceutical</option>
                <option value="photography">Photography</option>
                <option value="php">PHP Development</option>
                <option value="physics">Physics</option>
                <option value="political%2Feconomics%2Fpolicy%20research">Political/Economics/Policy Research</option>
                <option value="pr">Public Relations (PR)</option>
                <option value="programming">Programming</option>
                <option value="psychology">Psychology</option>
                <option value="python%2Fdjango">Python/Django Development</option>
                <option value="recruitment">Recruitment</option>
                <option value="ruby%20on%20rails">Ruby on Rails</option>
                <option value="sales">Sales</option>
                <option value="science">Science</option>
                <option value="search%20engine%20optimization%20%28seo%29">Search Engine Optimization (SEO)</option>
                <option value="social%20media%20marketing">Social Media Marketing</option>
                <option value="social%20work">Social Work</option>
                <option value="software%20development">Software Development</option>
                <option value="software%20testing">Software Testing</option>
                <option value="strategy">Strategy</option>
                <option value="supply%20chain%20management%20%28scm%29">Supply Chain Management (SCM)</option>
                <option value="talent%20acquisition">Talent Acquisition</option>
                <option value="telecalling">Telecalling</option>
                <option value="travel%20and%20tourism">Travel &amp; Tourism</option>
                <option value="ui%2Fux">UI/UX Design</option>
                <option value="video%20making%2Fediting">Video Making/Editing</option>
                <option value="videography">Videography</option>
                <option value="volunteering">Volunteering</option>
                <option value="web%20development">Web Development</option>
                <option value="wordpress%20development">Wordpress Development</option>
        
                    </select>
                    <br>
                    <br>

                <label >Duration</label>
                <br>   




                <select data-placeholder="Duration" id="select_duration" name="duration" >
                <option value=""> Select duration </option>
                <option value="2%20weeks">2 Weeks</option>
                <option value="3%20weeks">3 Weeks</option>
                <option value="5%20weeks">5 Weeks</option>
                <option value="6%20weeks">6 Weeks</option>
                <option value="1%20month">1 Month</option>
                <option value="2%20month">2 Months</option>
                <option value="3%20month">3 Months</option>
                <option value="4%20month">4 Months</option>
                <option value="5%20month">5 Months</option>
                <option value="6%20month">6 Months</option>
                </select>
               
              <br>
              <br>
                <label >Location</label>
                <br> 
                  


                <select data-placeholder="Choose city" id="city" name="location"  tabindex="2">
                <option value=""> Choose city </option>
                <option value="ahmedabad">Ahmedabad</option>
                <option value="ambala">Ambala</option>
                <option value="ambala%20cantt">Ambala Cantt</option>
                <option value="ambernath">Ambernath</option>
                <option value="amritsar">Amritsar</option>
                <option value="anand">Anand</option>
                <option value="andheri">Andheri</option>
                <option value="badlapur">Badlapur</option>
                <option value="ballari">Ballari</option>
                <option value="bangalore">Bangalore</option>
                <option value="bangalore%20urban">Bangalore Urban</option>
                <option value="bhopal">Bhopal</option>
                <option value="bidhannagar">Bidhannagar</option>
                <option value="bilaspur">Bilaspur</option>
                <option value="boston">Boston</option>
                <option value="calcutta">Calcutta</option>
                <option value="chandigarh">Chandigarh</option>
                <option value="chennai">Chennai</option>
                <option value="coimbatore">Coimbatore</option>
                <option value="delhi">Delhi</option>
                <option value="dombivli">Dombivli</option>
                <option value="faridabad">Faridabad</option>
                <option value="gandhinagar">Gandhinagar</option>
                <option value="ghaziabad">Ghaziabad</option>
                <option value="greater%20noida">Greater Noida</option>
                <option value="gurgaon">Gurgaon</option>
                <option value="gwalior">Gwalior</option>
                <option value="hsinchu%20city">Hsinchu City</option>
                <option value="hubballi">Hubballi</option>
                <option value="hyderabad">Hyderabad</option>
                <option value="indore">Indore</option>
                <option value="jaipur">Jaipur</option>
                <option value="jalandhar">Jalandhar</option>
                <option value="kalyan">Kalyan</option>
                <option value="kharar">Kharar</option>
                <option value="kolhapur">Kolhapur</option>
                <option value="kolkata">Kolkata</option>
                <option value="kota">Kota</option>
                <option value="london">London</option>
                <option value="los%20angeles">Los Angeles</option>
                <option value="ludhiana">Ludhiana</option>
                <option value="manipal">Manipal</option>
                <option value="mehsana">Mehsana</option>
                <option value="menlo%20park">Menlo Park</option>
                <option value="mohali">Mohali</option>
                <option value="mountain%20view">Mountain View</option>
                <option value="mumbai">Mumbai</option>
                <option value="mumbai%20suburban">Mumbai Suburban</option>
                <option value="nadiad">Nadiad</option>
                <option value="nagpur">Nagpur</option>
                <option value="nalgonda">Nalgonda</option>
                <option value="nashik">Nashik</option>
                <option value="navi%20mumbai">Navi Mumbai</option>
                <option value="new%20town">New Town</option>
                <option value="new%20york">New York</option>
                <option value="noida">Noida</option>
                <option value="palwal">Palwal</option>
                <option value="panchkula">Panchkula</option>
                <option value="patiala">Patiala</option>
                <option value="patna">Patna</option>
                <option value="pimpri-chinchwad">Pimpri-Chinchwad</option>
                <option value="pittsburgh">Pittsburgh</option>
                <option value="puducherry">Puducherry</option>
                <option value="pune">Pune</option>
                <option value="raipur">Raipur</option>
                <option value="ranchi">Ranchi</option>
                <option value="ranga%20reddy">Ranga Reddy</option>
                <option value="redmond">Redmond</option>
                <option value="rupnagar">Rupnagar</option>
                <option value="san%20francisco">San Francisco</option>
                <option value="sangareddy">Sangareddy</option>
                <option value="seattle">Seattle</option>
                <option value="secunderabad">Secunderabad</option>
                <option value="shahapur">Shahapur</option>
                <option value="shimla">Shimla</option>
                <option value="siliguri">Siliguri</option>
                <option value="sohna">Sohna</option>
                <option value="solapur">Solapur</option>
                <option value="south%20delhi">South Delhi</option>
                <option value="surat">Surat</option>
                <option value="thane">Thane</option>
                <option value="udaipur">Udaipur</option>
                <option value="vadodara">Vadodara</option>
                <option value="vasai">Vasai</option>
                <option value="visakhapatnam">Visakhapatnam</option>
                <option value="warangal">Warangal</option>
                <option value="washington">Washington</option>
                <option value="zirakpur">Zirakpur</option>
               
        
                    </select>
             
                    <br><br>


          </div>
            <div class="sign-up">
          <input  type="submit" value="Search">
          </div>
        </form>
      </div>

      </div> <!--COl-MD-4 -->

      <div class="col-md-9" >
        <iframe src="demo_iframe.php" name="iframe1" id="iframed" ></iframe>
      </div>
</div>
</div>




</body>
</html>

