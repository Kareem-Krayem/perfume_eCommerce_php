<?php
include 'connection.php';
session_start();
ob_start();
$id = $_GET['id'];
$cust_id = $_SESSION['customer_logged'];
$q = "DELETE FROM `whishlist` WHERE `whishlist_customer_id` = '{$cust_id}' AND `whishlist_product_id` = '{$id}'";
$res= mysqli_query($conn , $q);
echo '<script>window.location.href="index.php";</script>';
?>