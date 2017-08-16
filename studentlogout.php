<?php session_start(); ?>
<?php
unset($_SESSION['studentID']);
unset($_SESSION['studentname']);
header('location:index.php')


?>