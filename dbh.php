<?php
$conn_error='could not connect';
$host='localhost';
$user='root';
$pass='';
$db='ipp';
$conn=mysqli_connect($host,$user,$pass,$db);
if(!$conn)
die($conn_error);



?>