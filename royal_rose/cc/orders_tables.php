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
<u><h1>Orders</h1></u>
<br>

<div class="card" id='orders'>                               
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
onload(fill_sub_cat());
function fill_sub_cat(){
    var orders = document.getElementById('orders');
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", 'fill_orders.php' , true);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                orders.innerHTML = this.responseText;
            }
        };
        xhttp.send();
}
function dltOrder(id){
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", 'dltOrder.php?id='+id , true);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                fill_sub_cat();
            }
        };
        xhttp.send();  
}

</script>