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
<u><h1>Footer</h1></u>
<br>
<div class="card">                               
        <div class="card-body">
            <div class="card-title">
            <h3 class="text-center title-2">Footer</h3>
            </div>
            <hr>
                <input class='btn btn-warning btn-lg' style='margin-left:30% ; margin-top:20px ; margin-bottom:20px' value='Clear' onclick='dltFooterAbout()' />
        </div>
</div>
<div class="card" id='social'>                               
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
onload(fill_social());
function fill_social(){
    var social = document.getElementById('social');
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", 'fill_social.php' , true);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                social.innerHTML = this.responseText;
            }
        };
        xhttp.send();
}
function dltSocial(id){
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", 'dltSocial.php?id='+id , true);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                fill_social();
            }
        };
        xhttp.send();  
}
function dltFooterAbout(){
            var xhttp = new XMLHttpRequest();
            xhttp.open("GET", 'dltFooterAbout.php' , true);
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                
                }
            };
            xhttp.send();  
}
</script>