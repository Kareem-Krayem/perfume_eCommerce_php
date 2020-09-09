<?php
include 'connection.php';
session_start();
ob_start();
if(isset($_SESSION['customer_logged'])){
    $cust_id = $_SESSION['customer_logged'];
    $q="SELECT * FROM `whishlist` WHERE `whishlist_customer_id` = '{$cust_id}'";
    $res = mysqli_query($conn , $q);
    while($row = mysqli_fetch_assoc($res)){
        $wish_id = $row['whishlist_id'];
        $wish_pro = $row['whishlist_product_id'];
        $qq = "INSERT INTO `order`(`order_cust_id`, `order_product_id`) 
               VALUES ('{$cust_id}' , '{$wish_pro}')";
        $ress = mysqli_query($conn , $qq);
        $qqq = "DELETE FROM `whishlist` WHERE `whishlist_id` = '{$wish_id}'";
        mysqli_query($conn , $qqq);
    }

    echo "<script>";
    echo "window.location.replace('index.php');";
    echo "</script>";
}

?>