<?php
session_start();
ob_start();
include 'connection.php';
include 'cc_functions.php';
if(isset($_SESSION['user_logged'])){
head();
mobile_nav();
navigation();
top();
new_category();
footer();
}else{
header("location:login.php");
}
?>