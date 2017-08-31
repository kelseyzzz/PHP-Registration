<?php
    
    // $required = array('emailInput','passwordInput','passwordAgainInput','firstNameInput','lastNameInput','phoneInput','dateInput','cardInput','expirationInput' );
    
	session_start();

		if($_GET['action'] == "register") {
			
			$email = $_POST["emailInput"];
			$password = crypt($_POST["passwordInput"]);
			$firstName = $_POST["firstNameInput"];
			$lastName = $_POST["lastNameInput"];
			$phoneNumber = $_POST["phoneInput"];
			$birthDate = $_POST["dateInput"];
			$cardNumber = $_POST["cardInput"];
			$expirationDate = $_POST["expirationInput"];
			$postInfo = $_POST;
			
			foreach ($postInfo as $info) {
				if(empty($info)) {
				die("Please do not leave any fields blank!<br><br><a href='register.php'>Go Back</a> to the form");
				}
			}
			
			if (!filter_var($_POST['emailInput'], FILTER_VALIDATE_EMAIL)) {
				die("Please enter a valid email <a href='register.php'>RETRY</a>");
			}
			
			
			$fileName = "customers.csv";
			$textToWrite = $email."|".$password."|".$firstName."|".$lastName."|".$phoneNumber."|".$birthDate."|".$cardNumber."|".$expirationDate."\n";
			
			//Open and write to the file
			$handler = fopen($fileName, "a+");
			fwrite($handler, $textToWrite);
			fclose($handler);
			
			echo "Thanks for registering, $firstName.<br><br>";
			
			
			echo "<a href='login.php'>Log in</a> to your account.";
			
		} 
    
?>