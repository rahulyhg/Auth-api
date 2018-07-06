<!DOCTYPE html>
	<html>
	<head>
		<title>SignIn!</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width ,initial-scale=1 user-scalable=0">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
			<div class="container-fluid text-center " id="mainicon">
					<div class="row">
						<div class="col-md-6">
							<a href="index.html"  id="linkbtn1">
							<span class="glyphicon glyphicon-home"></span>
							<h3>HOME</a></h3>
						</div>
						<div class="col-md-6">
							<a href="signin.html" id="linkbtn1">
							<span class="glyphicon glyphicon-user"></span>
							<h3>SIGN IN</a></h3>
						</div>
					</div>
					</div>
	<div class="container-fluid" id="first">
		<div class="box">
	<div class="head">
	<h1>Sign In</h1>
	</div>
	<form action='decide.php' method="POST">
		<div id="form-group">
	<label for="username">Username:</label>
	<input type="text" name="name" required placeholder="Nishtha" class="form-control" id="username">
	<br>
	<label for="pass">Password:</label>
	<input type="password" name="password" placeholder="Type your password" class="form-control" required id="pass">
	<br>
	<button type="submit" class="btn btn-lg align-items-center" id="submitbtn" >Sign In</button>
	</div>
	</form>
	</div>
	
	</body>
	</html>
