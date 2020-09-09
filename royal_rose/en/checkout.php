<?php
include 'connection.php';
session_start();
ob_start();
// $cust = $_SESSION['customer_logged'];
// $q = "SELECT * FROM `whishlist` WHERE `whishlist_customer_id` = '{$cust}'";
// $res = mysqli_query($conn , $q) or die();
// $prods[]='';
// while($row = mysqli_fetch_assoc($res)){
// $prods= $row['whishlist_product_id'];
// }
// print_r($prods);
echo "hi";
?>
<script>
if(confirm('Are you sure you want to order these?'))
{
    window.location.replace("checkout_final.php");
}else{
    window.location.replace("index.php");
}
</script>
