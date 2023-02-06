<?php
//koneksi
$server="localhost";
$username="root";
$password="";
$db="medical_record";

$connect = mysqli_connect($server,$username,$password);
$select_db = mysqli_select_db($connect,$db);
?>


