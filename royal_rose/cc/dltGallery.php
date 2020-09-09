<?php
include 'connection.php';
$id = $_GET['id'];
$q="DELETE FROM `gallery` WHERE `gallery_id` = '{$id}'";
$qq = "SELECT * FROM `gallery` WHERE `gallery_id` = '{$id}'";
$res= mysqli_query($conn , $qq);
$row = mysqli_fetch_assoc($res);
$slideName = $row['gallery_image'];   
$dir = "gallery/";    
    $dirHandle = opendir($dir);    
        while ($file = readdir($dirHandle)) {    
            if($file==$slideName) {
                unlink($dir."/".$file);//give correct path,
            }
        }    
        closedir($dirHandle);

$res= mysqli_query($conn , $q);
?>