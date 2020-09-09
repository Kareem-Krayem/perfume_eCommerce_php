<?php
include 'connection.php';
$q="DELETE FROM `about`";
$res= mysqli_query($conn , $q);
$dir = 'about/';
foreach(glob($dir.'*.*') as $v){
    unlink($v);
}
?>