<?php
include 'connection.php';
$id = $_GET['id'];
$q="DELETE FROM `blog` WHERE `blog_id` = '{$id}'";
$qq = "SELECT * FROM `blog` WHERE `blog_id` = '{$id}'";
$res= mysqli_query($conn , $qq);
$row = mysqli_fetch_assoc($res);
$slideName = $row['blog_image'];   
$dir = "blogs/";    
    $dirHandle = opendir($dir);    
        while ($file = readdir($dirHandle)) {    
            if($file==$slideName) {
                unlink($dir."/".$file);//give correct path,
            }
        }    
        closedir($dirHandle);

$res= mysqli_query($conn , $q);
?>