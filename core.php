<?php
include 'dbh.php';
session_start();
       if($_SESSION['status']!="Active")          
       {
    header("location:login.php");
}

  $username=$_SESSION['user_id'];
  echo "WELCOME ".$username;

  include 'roomdetail.html';
?>