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
    <u><h1>About</h1></u>
    <br>
    <div class="card">                               
            <div class="card-body">
            <div class="card-title">
            <h3 class="text-center title-2">About Us</h3>
            </div>
            <hr>
                <input class='btn btn-warning btn-lg' style='margin-left:30% ; margin-top:20px ; margin-bottom:20px' value='Clear' onclick='dltAbout()' />
            </div>
        </div>

    </div>
</div>
<?php
footer();
}else{
header("location:login.php");
}
?>
<script>
    function dltAbout(){
            var xhttp = new XMLHttpRequest();
            xhttp.open("GET", 'dltAbout.php' , true);
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                
                }
            };
            xhttp.send();  
    }
</script>