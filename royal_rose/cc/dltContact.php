<?php
include 'connection.php';
$id = $_GET['id'];
$q="DELETE FROM `contact` WHERE `contact_id` = '{$id}'";
$res= mysqli_query($conn , $q);
?>