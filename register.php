<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>

</head>
<body>
<!--<h1 align="center">EXAM SEATING ARRANGEMENT</h1>-->
<?php
#echo "register.php";
 include 'dbh.php';

 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $query = "INSERT INTO users (username,password,email) VALUES('$username','$password','$email')";
 $result = mysqli_query($conn,$query);
 if($result==1){
print "<script type='text/javascript'>alert('Successfully Signed Up');window.location='login.html';</script>"; 
 }else{
     print "<script type='text/javascript'>alert('Sign Up Unsucessfulll');window.location='register.html';</script>"; 
 }

?>



</body>
</html>