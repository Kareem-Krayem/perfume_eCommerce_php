<?php
include 'connection.php';
?>

<div class="card-body">
    <div class="card-title">
    <h3 class="text-center title-2">All Orders</h3>
    </div>
    <hr>

    <div class="table-responsive table-responsive-data2">
    <table class="table table-data2">
    <thead>
    <tr style='align:center ; border-bottom:1px solid'>
    <th style='text-align:center'>Customer</th>
    <th style='text-align:center'>Products</th>
    <th style='text-align:center'>Location</th>
    <th style='text-align:center'>Action</th>
    <th></th>
    </tr>
    </thead>
    <tbody>
    <?php
    $q="SELECT * FROM `order`";
    $res= mysqli_query($conn , $q);
    $row = mysqli_fetch_assoc($res);
    $customer_id = $row['order_cust_id'];
    $q = "SELECT * FROM `customer` WHERE `customer_id` = '{$customer_id}'";
    $ress = mysqli_query($conn , $q);
    $row = mysqli_fetch_assoc($ress);
    $cust_name = $row['customer_username'];
    $cust_location = $row['customer_address'];
    $qq = "SELECT * FROM `order` WHERE `order_cust_id` = '{$customer_id}'";
    $resss = mysqli_query($conn , $qq);
    while($rowww = mysqli_fetch_assoc($resss)){
        echo "<tr style='align:center ;'>";
        echo "<td style='text-align:center'>".$cust_name."</td>";
        echo "<td style='text-align:center'>".$rowww['order_product_id']."</td>";
        echo "<td style='text-align:center'>".$cust_location."</td>";
        echo "<td style='text-align:center ; position:absolute ; margin-left:50px'>";
        echo "<div class='table-data-feature' style='text-align:center ; margin-left:-15px'>";
        echo "<button class='item' data-toggle='tooltip' data-placement='top' title='Delete' onclick='dltOrder(".$customer_id.")'>";
        echo "<i class='zmdi zmdi-delete'></i></button>";
        echo "</div></td></tr>";
        echo "<tr class='spacer'></tr>";
        echo "<tr class='tr-shadow'>";
    }

    ?>
<style>
.zmdi:hover{
 background:gold;
}

.item:hover{
    background:gold;
}
</style>


    </tbody>
    </table>
    </div>

    </div>