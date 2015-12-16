<!DOCTYPE html>
<html>
<head>
	<title>AdminPanel - Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="assets/css/fontawesome/css/font-awesome.min.css" media="all" /> 
	<link rel="stylesheet" type="text/css" href="assets/css/application.css" media="screen">
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</head>
<body>	<!-- Fixed navbar -->
	<div class="navbar navbar-fixed-top navbar-inverse" style='margin-top:-2px;'>
	  <div class="navbar-inner">
		<div class="container">
			<div class="nav-collapse collapse">
				<ul class="nav">
					<li class='active'><a class="brand " href="./?sub" ><i class='icon-book'></i> AdminPanel </a></li>
				</ul>
				<ul class="nav pull-right">
					<li class='active' style='margin-top:2px;'><a href="login.php" ><i class="icon-user"></i>&nbsp; Login &nbsp; </a></li>
				</ul>
			</div>
		</div>
	  </div>
	</div>
	<!-- end of fixed Nav bar--> 	<style>body {
        background-color: #f5f5f5;
      }</style>
    
	<div class="container">
	<br>
	<div id="error" ></div>
	<div class="row " >
		<div class="span4"></div>
		<div id="login" class="span4 well" style='background :white; border:1px silver solid;'>
			
			<form class="form-signin" action="verify.php" method="post" style="border:0px;">
			
			<h5>User Id </h5>
			<input type="text" class="input-block-level" placeholder="User Id" name="UserId" id="UserId">
			<h5>Password  </h5> 
			<input type="password" class="input-block-level" placeholder="Password" name="Password" id="Password"><br>
			<input class="btn  btn-primary" type="submit" name='Login' value = "Log in &rarr;" style='margin-top:10px;'/>
			
			</form>
		</div>
		<div class="span4"></div>
	</div>
	</div>
</body>
</html>
