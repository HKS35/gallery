<?php
$host = "localhost";
$user = "root";
$pw = "";
$db = "signup";
$conn = mysqli_connect($host,$user,$pw,$db);
if (!$conn) {
 	die('mysqli_error');
 } 
?>