<?php session_start(); ?>
<?php
unset($_SESSION['companyID']);
unset($_SESSION['companyname']);
header('location:index.php')


?>