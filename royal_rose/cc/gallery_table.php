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
<u><h1>Gallery</h1></u>
<br>
<div class="card" id='gallery'>                               
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
onload(fill_gallery());
function fill_gallery(){
    var gallery = document.getElementById('gallery');
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", 'fillGallery.php' , true);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                gallery.innerHTML = this.responseText;
            }
        };
        xhttp.send();
}
function dltGallery(id){
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", 'dltGallery.php?id='+id , true);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                fill_gallery();
            }
        };
        xhttp.send();  
}
</script>