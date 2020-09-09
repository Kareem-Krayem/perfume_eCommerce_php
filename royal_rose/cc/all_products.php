<?php
session_start();
ob_start();
include 'connection.php';
include 'cc_functions.php';
if(isset($_SESSION['user_logged'])){
head();
mobile_nav();
navigation();
top();
?>
<div class="main-content">
<div class="section__content section__content--p30">
<u><h1>Products</h1></u>
<br>

<div class="card" id='perfume_product'>                               
</div>

<div style='height:20px;'></div>
</div>
</div>
<?php
footer();
}else{
header("location:login.php");
}
?>

<script>
onload(fill_products());
function fill_products(){
    var perfume_product = document.getElementById('perfume_product');
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", 'fill_products.php' , true);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                perfume_product.innerHTML = this.responseText;
            }
        };
        xhttp.send();
}
function dltProduct(id){
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", 'dltProduct.php?id='+id , true);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                fill_products();
            }
        };
        xhttp.send();  
}

</script>