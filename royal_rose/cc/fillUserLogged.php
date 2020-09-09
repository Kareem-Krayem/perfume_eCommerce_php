<?php
session_start();
$user_logged = $_SESSION['user_logged'];

echo $user_logged;
?>