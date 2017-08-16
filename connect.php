<?php
$server="localhost";
$username="root";
$password="";
$db_name="interngo";

$con = mysqli_connect($server,$username,$password)or(mysql_error());
mysqli_select_db($con,$db_name);
?>