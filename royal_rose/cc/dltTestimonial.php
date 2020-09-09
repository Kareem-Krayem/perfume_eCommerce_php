<?php
include 'connection.php';
$id = $_GET['id'];
$q="DELETE FROM `testimonial` WHERE `testimonial_id` = '{$id}'";
$qq = "SELECT * FROM `testimonial` WHERE `testimonial_id` = '{$id}'";
$res= mysqli_query($conn , $qq);
$row = mysqli_fetch_assoc($res);
$slideName = $row['testimonial_image'];   
$dir = "testimonials/";    
    $dirHandle = opendir($dir);    
        while ($file = readdir($dirHandle)) {    
            if($file==$slideName) {
                unlink($dir."/".$file);//give correct path,
            }
        }    
        closedir($dirHandle);

$res= mysqli_query($conn , $q);
?>