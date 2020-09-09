<?php
include 'connection.php';
$id = $_GET['id'];
$q="DELETE FROM `sub_cat` WHERE `sub_cat_id` = '{$id}'";
$res= mysqli_query($conn , $q);
?>