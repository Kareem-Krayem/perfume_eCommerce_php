<?php
include 'connection.php';
$id = $_GET['id'];
$q = "DELETE FROM `order` WHERE `order_cust_id` = '{$id}'";
$res = mysqli_query($conn , $q);
?>