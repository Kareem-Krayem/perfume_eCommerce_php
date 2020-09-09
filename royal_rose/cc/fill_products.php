<?php
include 'connection.php';
?>

<div class="card-body">
    <div class="card-title">
    <h3 class="text-center title-2">All Products</h3>
    </div>
    <hr>

    <div class="table-responsive table-responsive-data2">
    <table class="table table-data2">
    <thead>
    <tr style='align:center ; border-bottom:1px solid'>
    <th style='text-align:center'>ID</th>
    <th style='text-align:center'>Name</th>
    <th style='text-align:center ; direction:rtl'>الأسم</th>
    <th style='text-align:center'>Price</th>
    <th style='text-align:center'>Rating</th>
    <th style='text-align:center'>Image</th>
    <th style='text-align:center'>Action</th>
    <th></th>
    </tr>
    </thead>
    <tbody>
    <?php
    $q="SELECT * FROM `product`";
    $res= mysqli_query($conn , $q);
    while($row = mysqli_fetch_assoc($res)){
        echo "<tr style='align:center ;'>";
        echo "<td style='text-align:center'>".$row['product_id']."</td>";
        echo "<td style='text-align:center'>".$row['product_title']."</td>";
        echo "<td style='text-align:center'>".$row['product_title_ar']."</td>";
        echo "<td style='text-align:center'>".$row['product_price']."</td>";
        echo "<td style='text-align:center'>".$row['product_rating']."</td>";
        echo "<td style='text-align:center'><a href='products/".$row['product_image']."'><img src=products/".$row['product_image']." style='width: 50px ; height: 50px ; border-radius: 100px'/></td>";
        echo "<td style='text-align:center ; position:absolute ; margin-left:30px'>";
        echo "<div class='table-data-feature' style='text-align:center'>";
        echo "<button class='item' data-toggle='tooltip' data-placement='top' title='Delete' onclick='dltProduct(".$row['product_id'].")'>";
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