<?php
	
	session_start();
	

    if($_GET['action'] == "login") {
    	
		 $email = $_POST["emailInput"];
		 $password = $_POST["passwordInput"];
  	
  
		 $isLoggedIn = false;
		 $fileName = "customers.csv";
		 $lines = file($fileName);
		 
	foreach ($lines as $row) {
			 $userParts = explode("|", $row);
			 // print_r($userParts);
			 if($userParts[0] == $_POST['emailInput'] && password_verify($_POST['passwordInput'], $userParts[1])) {
				 $_SESSION['emailInput']     = $userParts[0];
				 $_SESSION['firstName'] = $userParts[2];	
				 $_SESSION['is_user']   = 1;
				 $isLoggedIn = true;
			 }
	 }
	 
	 if($isLoggedIn) {
	 	
	 		echo "you are logged in!!! <br> <br>";
		 	echo "For list of customers, click <a href='customers.php'>here</a>. ";
		 
	 } else {
	 	
	 	echo "Bad username or password";
		 
		
      }
	 
  	}
  
	// elseif ($_GET['action'] == "logout") {
		// session_destroy();
		// echo "you are logged out!";
	// }
//   
  	// else {
//   	
  		// echo "Invalid email address and/or password.";
  	// }
  
?>