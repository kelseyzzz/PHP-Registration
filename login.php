<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Login to my site!</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> 
		<meta name="author" content="Kelsey Zahand" />
		<!-- Date: 2017-07-26 -->
	</head>
	<body style="margin:2em; text-align: center; background-color: #b5cdff;">
		
		<div> <b>Login</b> 
			<br /><br />
			
		</div>
		
		<div>
			<form action="handle_login.php?action=login" method="post">
				Email Address:
				<input type="text" name="emailInput"><br>
				Password: 
				<input type="password" name="passwordInput"><br>
				<button type="submit" value="Save">Login</button>
			</form>
			
		</div>
		<br>
		<a href="register.php">Register</a> first for an account

	</body>
</html>


