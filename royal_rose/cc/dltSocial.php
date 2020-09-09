<?php
include 'connection.php';
$id=$_GET['id'];
$q="DELETE FROM `social` WHERE `social_id` = '{$id}'";
$res = mysqli_query($conn , $q);
?>