<div class="card-body">
    <div class="card-title">
    <h3 class="text-center title-2">Images</h3>
    </div>
    <hr>

    <div class="table-responsive table-responsive-data2">
    <table class="table table-data2">
    <thead>
    <tr style='align:center ; border-bottom:1px solid'>
    <th style='text-align:center'>Image</th>
    <th style='text-align:center'>Action</th>
    <th></th>
    </tr>
    </thead>
    <tbody>
    <?php
    include 'connection.php';
    $q="SELECT * FROM `gallery`";
    $res= mysqli_query($conn , $q);
    while($row = mysqli_fetch_assoc($res)){
        echo "<tr style='align:center ;'>";
        echo "<td style='text-align:center'><a href='gallery/".$row['gallery_image']."'><img src=gallery/".$row['gallery_image']." style='width: 70px ; height: 70px ; border-radius: 20px'/></td>";
        echo "<td style='text-align:center ; position:absolute ; margin-left:50px'>";
        echo "<div class='table-data-feature'>";
        echo "<button class='item' data-toggle='tooltip' data-placement='top' style='margin-left:100px; margin-top:10px' title='Delete' onclick='dltGallery(".$row['gallery_id'].")'>";
        echo "<i class='zmdi zmdi-delete'></i></button>";
        echo "</div></td></tr>";
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