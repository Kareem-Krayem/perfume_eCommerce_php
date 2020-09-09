<?php
session_start();
ob_start();
include 'connection.php';
if(isset($_SESSION['customer_logged']) && $_GET['id']){
    $customer_id= $_SESSION['customer_logged'];
    $id = $_GET['id'];
    $q = "INSERT INTO `whishlist`(`whishlist_customer_id`, `whishlist_product_id`) 
      VALUES ('{$customer_id}' , '{$id}')";
    $res = mysqli_query($conn , $q) or die();
    echo "<script>";
    echo "window.location.assign('index.php');";
    echo "</script>";
}

?>