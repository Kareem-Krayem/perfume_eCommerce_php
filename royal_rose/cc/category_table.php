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
<u><h1>Category</h1></u>
<br>

<div class="card" id='sub_cat'>                               
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
    var sub_cat = document.getElementById('sub_cat');
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", 'fill_sub_cat.php' , true);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                sub_cat.innerHTML = this.responseText;
            }
        };
        xhttp.send();
}
function dltSub(id){
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", 'dltSub.php?id='+id , true);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                fill_sub_cat();
            }
        };
        xhttp.send();  
}

</script>