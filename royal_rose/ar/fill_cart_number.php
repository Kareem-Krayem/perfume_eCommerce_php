<?php
include 'connection.php';
session_start();
ob_start();
if(!isset($_SESSION['customer_logged'])){
    echo 0;
}else{
    $id = $_SESSION['customer_logged'];
    $q = "SELECT COUNT(*) as A FROM `whishlist` WHERE `whishlist_customer_id` = '{$id}'";
    $res = mysqli_query($conn , $q);
    $row = mysqli_fetch_assoc($res);
    echo $row['A'];
}

?>