<!DOCTYPE html>
<html>
<head><!--header files are added here-->
<title>Home Page:: Seating Arragement</title>

<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Champion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--/header files are added here-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="main1.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="header-nav">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						<div class="logo">
							<a class="navbar-brand" href="index.html">Seating Arrangement <span>my first project</span></a>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					 <ul class="nav navbar-nav">
					 <li class="hvr-sweep-to-bottom active"><a href="index.html" class="scroll">About Project</a></li>

						<li class="hvr-sweep-to-bottom"><a href="login.php">Admin Login</a></li>
						<li class="hvr-sweep-to-bottom"><a href="faculty.php" class="scroll">Faculty</a></li>		
						<li class="hvr-sweep-to-bottom"><a href="sview.html" class="scroll">Student</a></li>
						
						<li class="hvr-sweep-to-bottom"><a href="register.html" class="scroll">Sign Up</a></li>
					  </ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
<!-- //header -->


<div class="conregistration">
<!--Forms-->
	
   <div class="loginscene"><div class="page-header">
           <center><h1>Admin Login</h1>
		<h2>Exam Seating Arrangement</h2></center>
      </div>
  <div class="bs-example" data-example-id="simple-horizontal-form">
      <form class="form-horizontal" action="login_validator.php" method="post">
      <div class="form-group">
        <label for="username" class="col-sm-2 control-label">Username</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="user" name="user"  required>
        </div>
      </div>
      <div class="form-group">
        <label for="password" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="pass" name="pass"  required>
        </div>
      </div>
	  
	  
      
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
         <!--<input type="submit" value="SIGN UP"/><br> -->
		 <button type="submit" class="btn btn-default btn-info">Sign Up</button>
        </div>
   
    
  </div>
 </form>
	<!--//forms-->
	</div>
</div>
</div>

</body>
</html>
