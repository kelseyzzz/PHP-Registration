<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Register</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> 
		<meta name="author" content="Kelsey Zahand" />
		<!-- Date: 2017-07-26 -->
	</head>
	<body style="margin:2em; background-color: #b5ffbc">
		
		<div style="text-align: center"> <b>Register Here </b>
			<br /><br />
			
		</div>
		
		<div>
			<form action="handle_register.php?action=register" method="post" style="text-align: center">
				Email Address:
				<input type="text" name="emailInput"><br>
				Password: 
				<input type="password" name="passwordInput"><br>
				Password (again): 
				<input type="password" name="passwordAgainInput"><br>
				First Name:
				<input type="text" name="firstNameInput"><br>
				Last Name: 
				<input type="text" name="lastNameInput"><br>
				Phone Number: 
				<input type="text" name="phoneInput"><br>
				Date of Birth:
				<input type="date" name="dateInput"><br>
				Credit Card Number:
				<input type="text" name="cardInput"><br>
				Expiration Date:
				<select name="expirationInput">
                    <option value="01">January</option>
                    <option value="02">February </option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                <select name="expirationInput">
                    <option value="17"> 2017</option>
                    <option value="18"> 2018</option>
                    <option value="19"> 2019</option>
                    <option value="20"> 2020</option>
                    <option value="21"> 2021</option>
                </select><br>
				<br>
				
				<input type="submit" value="Register"><br>
		
			</form>
			
			
		</div>
		<br>
		<div style="text-align: center">
			<a href="login.php">Login</a> first for an account
		</div>
		
	</body>
</html>
