<?php
include 'connection.php';
$id = $_GET['id'];
$q="DELETE FROM `location` WHERE `location_id` = '{$id}'";
$res= mysqli_query($conn , $q);
?>