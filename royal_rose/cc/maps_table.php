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
<u><h1>Maps</h1></u>
<br>
<div class='card' id='maps'></div>

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
onload(fill_maps());
function fill_maps(){
    var maps = document.getElementById('maps');
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", 'fill_maps.php' , true);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                maps.innerHTML = this.responseText;
            }
        };
        xhttp.send();
}
function dltMaps(id){
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", 'dltMaps.php?id='+id , true);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                fill_maps();
            }
        };
        xhttp.send();  
}
</script>