<?php
session_start();
ob_start();
include 'connection.php';
include 'cc_functions.php';
head();
login();
?>