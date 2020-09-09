<?php
include 'connection.php';
session_start();
ob_start();
if(!isset($_SESSION['customer_logged'])){
    echo '<p>Nothing in the cart</p>';
}else{
$id = $_SESSION['customer_logged'];
$q = "SELECT * FROM `whishlist` WHERE `whishlist_customer_id` = '{$id}'";
$res = mysqli_query($conn , $q);
$prod_ids[] = '';
$total_price = 0;
while($row = mysqli_fetch_assoc($res)){
    $prod_ids[] = $row['whishlist_product_id'];
}
foreach ($prod_ids as $a){
    $q = "SELECT * FROM `product` WHERE `product_id` = '{$a}'";
    $res = mysqli_query($conn , $q);
    while($row= mysqli_fetch_assoc($res)){
        $total_price += $row['product_price'];
        echo '<div class="shp__single__product"><div class="shp__pro__thumb">';
        echo '<a href="products.php?id='.$row['product_id'].'">';
        echo '<img src="../cc/products/'.$row['product_image'].'" alt="product images"></a></div>';
        echo '<div class="shp__pro__details" style="margin-top:-25px">';
        echo '<h2><a href="products.php?id='.$row['product_id'].'">'.$row['product_title'].'</a></h2>';
        echo '<span class="shp__price">'.$row['product_price'].'$</span></div>';
        echo '<div class="remove__btn">';
        echo '<a href="remove_whishlist.php?id='.$row['product_id'].'" title="Remove this item"><i class="zmdi zmdi-close"></i></a></div></div>';
    }
}
echo '</div>';
echo '<ul class="shoping__total">';
echo '<li class="subtotal">Subtotal:</li>';
echo '<li class="total__price">'.$total_price.'$</li>';
echo '</ul>';
echo '<ul class="shopping__btn">';
echo '<li class="shp__checkout"><a href="checkout.html">Checkout</a></li>';
echo '</ul>';
}
?>

<!-- <span class="quantity">QTY: 1</span> -->
