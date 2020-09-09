<?php
include 'connection.php';
$id = $_GET['id'];
$q="DELETE FROM `phone` WHERE `phone_id` = '{$id}'";
$res=mysqli_query($conn , $q);
?>