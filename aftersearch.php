<?php
	
	// Include database connection settings
	include("connect.php");
	
	$cat=$_REQUEST['search'];
	$duration=$_REQUEST['duration'];
	$locationi=$_REQUEST['location'];	
	
	
	$query = "SELECT * FROM internship WHERE  category = '$cat' OR duration = '$duration' OR location = '$locationi' ";

	$sql=mysqli_query($con, $query);
	//$result=mysqli_fetch_array($sql);

if (mysqli_num_rows($sql) > 0) {
    // output data of each row
    while($result = mysqli_fetch_array($sql)) {

    	?> 
		<html>
		<head></head>
		<body style="color:#06B0A0;">
		
			<form action="apply.php" target="_top">
			<label>Details:</label>
			<label style="color:black;"><?php echo $result['about'];?>
			</label>
			<br>


			<label>Requirement:</label>
			<label style="color:black;"><?php echo $result['requireInt'];?>
			</label>
			<br>
			<label>Stream:</label>
			<label style="color:black;"><?php echo $result['category'];?>
			</label>
			
			<br>
			<label>Start Date:</label>
			<label style="color:black;"><?php echo $result['start_date'];?>
			</label>
			
			<br>
			<label>Duration:</label>
			<label style="color:black;"><?php echo $result['duration'];?>
			</label>
			
			<br>
			<label>Stipend:</label>
			<label style="color:black;"><?php echo $result['stipend'];?>
			</label>
			
			<br>
			<label>Apply By:</label>
			<label style="color:black;"><?php echo $result['applyby'];?>
			</label>
			<br>
			<label>Location:</label>
			<label style="color:black;"><?php echo $result['location'];?>
			</label>

			<br>
			 <input  type="submit" value="Apply">
			</form>
			<hr>

		</body>
		</html>
       <?php 
    }
} else {
    
    $message = "Can't find the data";
		echo $message;
}

