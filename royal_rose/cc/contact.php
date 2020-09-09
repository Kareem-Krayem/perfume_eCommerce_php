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
<u><h1>Contact Us</h1></u>
<br>

<div class="card" id='contact'>                               
</div>

<div class="card" id='phone'>                               
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
onload(fill_contact());
onload(fill_phone());
function fill_contact(){
    var contact = document.getElementById('contact');
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", 'fill_contact.php' , true);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                contact.innerHTML = this.responseText;
            }
        };
        xhttp.send();
}
function dltContact(id){
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", 'dltContact.php?id='+id , true);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                fill_contact();
            }
        };
        xhttp.send();  
}
function fill_phone(){
    var phone = document.getElementById('phone');
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", 'fill_phone.php' , true);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                phone.innerHTML = this.responseText;
            }
        };
        xhttp.send();
}
function dltPhone(id){
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", 'dltPhone.php?id='+id , true);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                fill_phone();
            }
        };
        xhttp.send();  
}
</script>