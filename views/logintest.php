<?php
//for header redirection
ob_start();

//start session - needed to capture login information 
session_start(); 

//connnect to the controller
require("../settings/db_connection.php");

//check if login button was clicked 
if (isset($_POST['SUBMIT'])) {
	
	//get details 
	$email = $_POST['email'];
	$pass = $_POST['password'];
	echo $email.$pass;

	//check if email exist
	$check_log = get_login_fxn($email);


	if ($check_log) {
		//email exist, continue to password
		//get password from database
		$hash = $check_log[0]['pwd'];

		//verify password
		if (password_verify($pass, $hash)) 
		{
				//set session
				$_SESSION["user_id"] = $check_log[0]['id'];
                $_SESSION["user_email"] = $check_log[0]['customer_email'];
				$_SESSION["user_role"] = $check_log[0]['role'];
				

				if ($_SESSION["user_role"] == 1){
					//redirection to customer home page
				header('Location: ../index.html');
				//to make sure the code below does not execute after redirection
				exit;
				} else{
					//redirection to admin home page
				header('Location: ../views/admin_form.php');
				//to make sure the code below does not execute after redirection
				exit;
				}

				
		} else 
		{
				//echo appropriate error
			    echo 'username or password not correct';
			    
		}

	} else{
		//echo appropriate error
		echo "incorrect username or password";
		
	}
}

?>