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
<u><h1>Home</h1></u>
<br>

<div class="card" id='slider'>                               
</div>

<div class="card" id='testimonial'>                               
</div>

<div class="card" id='blog'>                               
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
onload(fill_slider());
onload(fill_testimonial());
onload(fill_blog());
function fill_slider(){
    var slider = document.getElementById('slider');
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", 'fillSlider.php' , true);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                slider.innerHTML = this.responseText;
            }
        };
        xhttp.send();
}
function dltSlide(id){
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", 'dltSlide.php?id='+id , true);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                fill_slider();
            }
        };
        xhttp.send();  
}
function fill_testimonial(){
    var testimonial = document.getElementById('testimonial');
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", 'fillTestimonial.php' , true);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                testimonial.innerHTML = this.responseText;
            }
        };
        xhttp.send();
}
function dltTestimonial(id){
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", 'dltTestimonial.php?id='+id , true);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                fill_testimonial();
            }
        };
        xhttp.send();  
}
function fill_blog(){
    var blog = document.getElementById('blog');
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", 'fillBlog.php' , true);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                blog.innerHTML = this.responseText;
            }
        };
        xhttp.send();
}
function dltBlog(id){
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", 'dltBlog.php?id='+id , true);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                fill_blog();
            }
        };
        xhttp.send();  
}
</script>