<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       include 'dbh.php';
       session_start();
       $_SESSION['status']="Active";
            $uname = $_POST["user"];
            $pass = $_POST["pass"];
             //echo "Uname : $uname Pass : $pass<br>";
            $sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass';";
                        
              $result=mysqli_query($conn, $sql);
                
            if($row = mysqli_fetch_array($result))
            {
                   
                    $_SESSION['status']="Active";
                   $_SESSION['user_id'] = $row['username'];
                   header("Location: core.php"); 
                
            }
            else
            {   
                echo $uname;
                echo $pass;
                //print "<script type='text/javascript'>alert('Invalid USN and password ');window.location='login.php';</script>";
            }            
             
        ?>
    
